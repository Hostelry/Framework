<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Http\Controllers\Registration;

use Hostelry\User\Entities\Owner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

final class VerifyAccount extends Controller
{
    public function __invoke(Owner $owner, Request $request) : RedirectResponse
    {
        if ($owner->isValidated()) {
            return redirect()->route('dashboard.login');
        }

        if ((! $owner->isValidated() && $request->post('activation_code') === $owner->activation_code)) {
            $owner->is_validated = true;
            $owner->save();

            return redirect()->route('dashboard.login');
        }

        return redirect()->back()->withErrors('Invalid Code');
    }
}
