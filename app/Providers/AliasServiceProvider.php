<?php

declare(strict_types=1);

namespace App\Providers;

use App\Enums\RoutesEnum;
use Illuminate\Support\ServiceProvider;

class AliasServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (! class_exists('RoutesEnum')) {
            class_alias(RoutesEnum::class, 'RoutesEnum');
        }
    }
}
