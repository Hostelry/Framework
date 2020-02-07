<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Http\Controllers\Registration;

use Hostelry\User\Entities\Owner;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

final class AccountValidation extends Controller
{
    public function __invoke(Owner $owner, Request $request)
    {
        if ($owner->isValidated()) {
            return redirect()->route('dashboard.login');
        }

        return view("dashboard::account.validate", compact('owner'));
    }
}
