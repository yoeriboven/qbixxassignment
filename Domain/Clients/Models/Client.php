<?php

declare(strict_types=1);

namespace Domain\Clients\Models;

use Domain\Items\Models\Item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public static function boot(): void
    {
        parent::boot();

        parent::created(function (Client $client): void {
            $items = include resource_path('default_items.php');

            $client->items()->createMany($items);
        });
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function withItemsGroupedByLanguage(): self
    {
        $this->setRelation('items', $this->items->groupBy('language'));

        return $this;
    }
}
