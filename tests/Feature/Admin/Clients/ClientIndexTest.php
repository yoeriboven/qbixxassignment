<?php

declare(strict_types=1);

namespace Tests\Feature\Admin\Clients;

use App\Enums\RoutesEnum;
use Domain\Clients\Models\Client;
use Tests\TestCase;

class ClientIndexTest extends TestCase
{
    /**
     * @test
     */
    public function a guest can view clients(): void
    {
        $clients = Client::factory()->count(5)->create();

        $response = $this->get(RoutesEnum::ADMIN_INDEX_CLIENTS)
            ->assertOk();

        foreach ($clients as $client) {
            $response->assertSee($client->id)
                ->assertSee($client->name);
        }
    }
}
