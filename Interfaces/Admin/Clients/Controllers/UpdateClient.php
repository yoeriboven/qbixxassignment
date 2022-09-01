<?php

declare(strict_types=1);

namespace Interfaces\Admin\Clients\Controllers;

use App\Enums\RoutesEnum;
use App\Http\Controllers\Controller;
use Domain\Clients\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Interfaces\Admin\Clients\Requests\UpdateClientRequest;

class UpdateClient extends Controller
{
    public function __invoke(UpdateClientRequest $request, Client $client): RedirectResponse
    {
        $client->update($request->safe(['name']));

        $client->items()->upsert(
            $this->normalizedItems($request->items)->toArray(),
            ['id'],
            ['title', 'paragraph', 'type']
        );

        return redirect()
            ->route(RoutesEnum::ADMIN_INDEX_CLIENTS)
            ->with('success', "{$client->name} has been updated successfully");
    }

    protected function normalizedItems($items): Collection
    {
        return collect($items)->flatten(1)->map(function (array $item) {
            return [
                'id' => $item['id'],
                'client_id' => $item['client_id'],
                'language' => $item['language'],
                'title' => $item['title'],
                'paragraph' => $item['paragraph'],
                'type' => $item['type'],
            ];
        });
    }
}
