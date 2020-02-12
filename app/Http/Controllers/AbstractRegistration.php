<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\AccountConfirmation;
use Hostelry\Business\Entities\Business;
use Hostelry\User\Entities\Owner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'password' => Hash::make($request->post('password')),
            'first_name' => $request->post('first_name'),
            'middle_name' => $request->post('middle_name'),
            'last_name' => $request->post('last_name'),
            'activation_code' => Str::random(8),
            'remember_token' => Str::random(32),
            'api_token' => Str::random(32),
        ]);

        $owner->addBusiness($business);

        Mail::to($owner->username)->send(new AccountConfirmation($owner));

        return redirect()->route('dashboard.verification', compact('owner'));
    }
}
