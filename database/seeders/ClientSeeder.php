<?php

declare(strict_types=1);

namespace Database\Seeders;

use Domain\Clients\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        Client::factory()->count(5)->create();
    }
}
