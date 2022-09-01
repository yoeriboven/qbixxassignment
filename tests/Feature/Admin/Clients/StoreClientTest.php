<?php

declare(strict_types=1);

namespace Tests\Feature\Admin\Clients;

use App\Enums\RoutesEnum;
use Domain\Clients\Models\Client;
use Tests\FeatureTest;

class StoreClientTest extends FeatureTest
{
    /**
     * @test
     */
    public function aGuestCanStoreANewClient(): void
    {
        $formData = [
            'name' => 'Test name',
        ];

        $this->post(route(RoutesEnum::ADMIN_STORE_CLIENT), $formData)
            ->assertRedirect(route(RoutesEnum::ADMIN_INDEX_CLIENTS));

        $client = Client::first();

        $this->assertSame('Test name', $client->name);
    }

    /**
     * @test
     *
     * @dataProvider invalidData
     */
    public function aGuestCanNotStoreANewClientWithInvalidData(string $columnName, string $value): void
    {
        $formData = [
            $columnName => $value,
        ];

        $this->post(route(RoutesEnum::ADMIN_STORE_CLIENT), $formData)
            ->assertSessionHasErrors($columnName);
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
