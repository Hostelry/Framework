<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\AccountConfirmation;
use Hostelry\Business\Entities\Business;
use Hostelry\Business\Entities\BusinessOwner;
use Hostelry\User\Entities\Owner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

abstract class AbstractRegistration
{
    public function __invoke(Request $request) : RedirectResponse
    {
        $businessName = $request->post('business_name');

        $business = Business::firstOrCreate(
            [
                'name' => $businessName,
                'type' => $request->post('type'),
            ],
            [
                'slug' => Str::slug($businessName)
            ]
        );

        $owner = Owner::firstOrCreate([
            'code' => Str::uuid()->toString(),
            'username' => $request->post('username'),
            'first_name' => $request->post('first_name'),
            'middle_name' => $request->post('middle_name'),
            'last_name' => $request->post('last_name'),
            'activation_code' => Str::random(8),
        ]);

        BusinessOwner::firstOrCreate([
            'business_id' => $business->id,
            'owner_id' => $owner->id,
        ]);

        Mail::to($owner->username)->send(new AccountConfirmation($owner));

        return redirect()->route('dashboard.verification', compact('owner'));
    }
}
