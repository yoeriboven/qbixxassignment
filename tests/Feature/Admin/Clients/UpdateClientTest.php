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
    public function a_guest_can_edit_a_clients_name(): void
    {
        $client = Client::factory()->create([
            'name' => 'Bruce Wayne',
        ]);

        $this->put(route(RoutesEnum::ADMIN_UPDATE_CLIENT, $client->id), [
            'name' => 'Tony Stark'
        ])->assertRedirect(route(RoutesEnum::ADMIN_INDEX_CLIENTS));

        $this->assertSame('Tony Stark', $client->fresh()->name);
    }

    /**
     * @test
     */
    public function a_guest_can_change_a_clients_items(): void
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
                        'type' => 9,
                    ])
                ]
            ]
        ])->assertRedirect(route(RoutesEnum::ADMIN_INDEX_CLIENTS));

        $item->refresh();

        $this->assertSame('New title', $item->title);
        $this->assertSame('New paragraph', $item->paragraph);
        $this->assertSame(9, $item->type);
    }

    /**
     * @test
     *
     * @dataProvider invalidData
     */
    public function a_guest_can_not_update_a_new_client_with_invalid_data(string $columnName, string $value): void
    {
        $client = Client::factory()->create();

        $this->put(route(RoutesEnum::ADMIN_UPDATE_CLIENT, $client->id), [
            $columnName => $value,
        ])->assertSessionHasErrors($columnName);
    }

    public function invalidData(): array
    {
        return [
            'required' => ['name', ''],
            'min 4' => ['name', 'fre'],
            'max 30' => ['name', 'Do you know someone with a name longer than 30 characters?'],
        ];
    }
}
