<?php

declare(strict_types=1);

namespace Tests\Feature\Admin\Clients;

use App\Enums\RoutesEnum;
use Tests\FeatureTest;

class CreateClientTest extends FeatureTest
{
    /**
     * @test
     */
    public function a_guest_can_create_clients(): void
    {
        $this->get(route(RoutesEnum::ADMIN_CREATE_CLIENT))
            ->assertOk();
    }
}
