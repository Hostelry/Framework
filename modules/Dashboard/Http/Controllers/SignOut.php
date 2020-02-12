<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class SignOut extends Controller
{
    public function __invoke(Request $request) : RedirectResponse
    {
        Auth::guard('dashboard')->logout();
        $request->session()->flush();

        return redirect()->route('dashboard.login');
    }
}
