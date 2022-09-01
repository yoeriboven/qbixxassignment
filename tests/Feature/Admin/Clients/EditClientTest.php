<?php

declare(strict_types=1);

namespace Tests\Feature\Admin\Clients;

use App\Enums\RoutesEnum;
use Tests\FeatureTest;

class EditClientTest extends FeatureTest
{
    /**
     * @test
     */
    public function a_guest_can_edit_clients(): void
    {
        $this->get(route(RoutesEnum::ADMIN_EDIT_CLIENT))
            ->assertOk();
    }
}
