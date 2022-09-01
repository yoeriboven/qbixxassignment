<?php

declare(strict_types=1);

namespace Interfaces\Admin\Clients\Controllers;

use App\Enums\RoutesEnum;
use App\Http\Controllers\Controller;
use Domain\Clients\Models\Client;
use Illuminate\Http\RedirectResponse;
use Interfaces\Admin\Clients\Requests\StoreClientRequest;
use Illuminate\Http\Request;

class UpdateClient extends Controller
{
    public function __invoke(Request $request, Client $client): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:30']
        ]);

        $client->update($validated);

        return redirect()->route(RoutesEnum::ADMIN_INDEX_CLIENTS);
    }
}
