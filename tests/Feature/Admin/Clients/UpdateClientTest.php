<?php

declare(strict_types=1);

namespace Tests\Feature\Admin\Clients;

use App\Enums\RoutesEnum;
use Domain\Clients\Models\Client;
use Tests\FeatureTest;

class UpdateClientTest extends FeatureTest
{
    /**
     * @test
     */
    public function aGuestCanEditAClientsName(): void
    {
        $client = Client::factory()->create([
            'name' => 'Bruce Wayne',
        ]);

        $this->put(route(RoutesEnum::ADMIN_UPDATE_CLIENT, $client->id), [
            'name' => 'Tony Stark',
        ])->assertRedirect(route(RoutesEnum::ADMIN_INDEX_CLIENTS));

        $this->assertSame('Tony Stark', $client->fresh()->name);
    }

    /**
     * @test
     */
    public function aGuestCanChangeAClientsItems(): void
    {
        $client = Client::factory()->create();
        $item = $client->items()->first();

        $this->put(route(RoutesEnum::ADMIN_UPDATE_CLIENT, $client->id), [
            'name' => $client->name,
            'items' => [
                'en' => [
                    array_merge($item->toArray(), [
                        'title' => 'New title',
                        'paragraph' => 'New paragraph',
                        'type' => 2,
                    ]),
                ],
            ],
        ])->assertRedirect(route(RoutesEnum::ADMIN_INDEX_CLIENTS));

        $item->refresh();

        $this->assertSame('New title', $item->title);
        $this->assertSame('New paragraph', $item->paragraph);
        $this->assertSame(2, $item->type);
    }

    /**
     * @test
     *
     * @dataProvider invalidNameData
     */
    public function aGuestCanNotUpdateANewClientWithAnInvalidName(string $columnName, string $value): void
    {
        $client = Client::factory()->create();

        $this->put(route(RoutesEnum::ADMIN_UPDATE_CLIENT, $client->id), [
            $columnName => $value,
        ])->assertSessionHasErrors($columnName);
    }

    public function invalidNameData(): array
    {
        return [
            'name required' => ['name', ''],
            'name min 4' => ['name', 'fre'],
            'name max 30' => ['name', 'Do you know someone with a name longer than 30 characters?'],
        ];
    }

    /**
     * @test
     *
     * @dataProvider invalidItemsData
     */
    public function aGuestCanNotUpdateANewClientWithInvalidItemsData(string $columnName, string $value): void
    {
        $client = Client::factory()->create();

        $this->put(route(RoutesEnum::ADMIN_UPDATE_CLIENT, $client->id), [
            'items' => [
                'en' => [
                    [
                        $columnName => $value,
                    ],
                ],
            ],
        ])->assertSessionHasErrors('items.en.0.'.$columnName);
    }

    public function invalidItemsData(): array
    {
        return [
            'items title required' => ['title', ''],
            'items paragraph required' => ['paragraph', ''],
            'items type required' => ['type', ''],
            'items type integer' => ['type', 'this is not an integer'],
            'items type should be 1,2,3' => ['type', '9'],
        ];
    }
}
