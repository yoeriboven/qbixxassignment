<?php

declare(strict_types=1);

use App\Enums\RoutesEnum;
use Illuminate\Support\Facades\Route;
use Interfaces\Admin\Clients\Controllers\EditClient;
use Interfaces\Admin\Clients\Controllers\IndexClients;
use Interfaces\Admin\Clients\Controllers\ShowClient;
use Interfaces\Admin\Clients\Controllers\StoreClient;
use Interfaces\Admin\Clients\Controllers\UpdateClient;
use Interfaces\Admin\Clients\Controllers\DeleteClient;
use Interfaces\Front\Landing\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', WelcomeController::class)->name(RoutesEnum::FRONT_WELCOME);

Route::prefix('admin')->group(function() {
    Route::get('clients', IndexClients::class)->name(RoutesEnum::ADMIN_INDEX_CLIENTS);
    Route::inertia('clients/create', 'Admin/Clients/Create')->name(RoutesEnum::ADMIN_CREATE_CLIENT);
    Route::post('clients/create', StoreClient::class)->name(RoutesEnum::ADMIN_STORE_CLIENT);
    Route::get('clients/{client}', ShowClient::class)->name(RoutesEnum::ADMIN_SHOW_CLIENT);
    Route::get('clients/{client}/edit', EditClient::class)->name(RoutesEnum::ADMIN_EDIT_CLIENT);
    Route::put('clients/{client}', UpdateClient::class)->name(RoutesEnum::ADMIN_UPDATE_CLIENT);
    Route::delete('clients/{client}', DeleteClient::class)->name(RoutesEnum::ADMIN_DELETE_CLIENT);
});

