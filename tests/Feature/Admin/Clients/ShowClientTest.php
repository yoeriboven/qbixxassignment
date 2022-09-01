<?php

declare(strict_types=1);

namespace Tests\Feature\Admin\Clients;

use App\Enums\RoutesEnum;
use Domain\Clients\Models\Client;
use Tests\FeatureTest;

class ShowClientTest extends FeatureTest
{
    /**
     * @test
     *
     * English is the default language on the show page.
     * That's why we're checking for the items in English.
     */
    public function aGuestCanSeeTheClientsItemsAndName(): void
    {
        $client = Client::factory()->create();

        $items = $client->items()->whereLanguage('en')->get();

        $this->get(route(RoutesEnum::ADMIN_SHOW_CLIENT, $client->id))
            ->assertSee($client->name)
            ->assertSee($items->get(0))
            ->assertSee($items->get(1))
            ->assertSee($items->get(2));
    }
}
