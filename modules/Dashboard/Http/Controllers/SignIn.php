<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Http\Controllers;

use Hostelry\Dashboard\Http\Requests\SignInRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

final class SignIn extends Controller
{
    public function __invoke(SignInRequest $request) : RedirectResponse
    {
        if ($request->isAuthenticated()) {
            return redirect()->route('dashboard.index');
        }

        return redirect()->back()->withErrors('Invalid account')->withInput([$request->only('username')]);
    }
}
