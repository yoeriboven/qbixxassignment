<?php

use App\Enums\RoutesEnum;
use Illuminate\Support\Facades\Route;
use Interfaces\Admin\Clients\Controllers\IndexClients;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/clients', IndexClients::class)->name(RoutesEnum::ADMIN_INDEX_CLIENTS);
