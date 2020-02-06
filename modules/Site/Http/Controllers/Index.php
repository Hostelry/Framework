<?php

declare(strict_types=1);

namespace Hostelry\Site\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class Index extends Controller
{
    public function __invoke(Request $request) : View
    {
        return view('site::index');
    }
}
