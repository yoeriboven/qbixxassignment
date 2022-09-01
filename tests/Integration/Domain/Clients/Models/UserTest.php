<?php

declare(strict_types=1);

namespace Tests\Integration\Domain\Clients\Models;

use Domain\Clients\Models\Client;
use Tests\FeatureTest;

class UserTest extends FeatureTest
{
    /**
     * @test
     */
    public function newUsersGetDefaultItems(): void
    {
        $this->assertDatabaseCount('items', 0);

        Client::factory()->create();

        $this->assertDatabaseCount('items', 9);
    }
}
