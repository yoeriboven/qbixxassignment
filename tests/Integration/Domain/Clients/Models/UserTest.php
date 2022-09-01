<?php

namespace Tests\Integration\Domain\Clients\Models;

use Tests\FeatureTest;
use Domain\Clients\Models\Client;

class UserTest extends FeatureTest
{
    /**
     * @test
     */
    public function new_users_get_default_items(): void
    {
        $this->assertDatabaseCount('items', 0);

        Client::factory()->create();

        $this->assertDatabaseCount('items', 9);
    }
}
