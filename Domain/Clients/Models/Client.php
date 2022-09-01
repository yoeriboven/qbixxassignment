<?php

declare(strict_types=1);

namespace Domain\Clients\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Item;

class Client extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        parent::created(function (Client $client) {
            $items = include resource_path('default_items.php');

            $client->items()->createMany($items);
        });
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
