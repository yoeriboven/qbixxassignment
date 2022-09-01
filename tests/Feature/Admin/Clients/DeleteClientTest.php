<?php

declare(strict_types=1);

namespace Tests\Feature\Admin\Clients;

use App\Enums\RoutesEnum;
use Domain\Clients\Models\Client;
use Tests\FeatureTest;

class DeleteClientTest extends FeatureTest
{
    /**
     * @test
     */
    public function aUserCanDeleteClients(): void
    {
        $client = Client::factory()->create();

        $this->assertTrue($client->exists());

        $this->delete(route(RoutesEnum::ADMIN_DELETE_CLIENT, $client->id));

        $this->assertFalse($client->exists());
    }

    /**
     * @test
     */
    public function itemsAreDeletedWhenAClientIsDeleted(): void
    {
        $client = Client::factory()->create();

        $this->assertDatabaseCount('items', 9);

        $this->delete(route(RoutesEnum::ADMIN_DELETE_CLIENT, $client->id));

        $this->assertDatabaseCount('items', 0);
    }
}
