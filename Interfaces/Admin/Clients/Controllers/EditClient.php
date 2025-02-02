<?php

declare(strict_types=1);

namespace Interfaces\Admin\Clients\Controllers;

use App\Http\Controllers\Controller;
use Domain\Clients\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EditClient extends Controller
{
    public function __invoke(Request $request, Client $client): Response
    {
        return Inertia::render('Admin/Clients/Edit', [
            'client' => $client->withItemsGroupedByLanguage(),
        ]);
    }
}
