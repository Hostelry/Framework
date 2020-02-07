<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Http\Controllers\Registration;

use App\Mail\AccountConfirmation;
use Hostelry\User\Entities\Owner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

final class ResendConfirmationEmail extends Controller
{
    public function __invoke(Owner $owner) : RedirectResponse
    {
        $owner->activation_code = Str::random(8);
        $owner->save();

        Mail::to($owner->username)->send(new AccountConfirmation($owner));

        return redirect()->back();
    }
}
