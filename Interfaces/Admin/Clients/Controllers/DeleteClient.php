<?php

declare(strict_types=1);

namespace Interfaces\Admin\Clients\Controllers;

use App\Enums\RoutesEnum;
use App\Http\Controllers\Controller;
use Domain\Clients\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeleteClient extends Controller
{
    public function __invoke(Request $request, Client $client): RedirectResponse
    {
        $client->delete();

        return redirect()->route(RoutesEnum::ADMIN_INDEX_CLIENTS);
    }
}
