<?php

declare(strict_types=1);

namespace Interfaces\Admin\Clients\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CreateClient extends Controller
{
    public function __invoke(): View
    {
        return view('pages.admin.clients.create');
    }
}
