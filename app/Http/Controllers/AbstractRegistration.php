<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Hostelry\Business\Entities\Business;
use Hostelry\Business\Entities\BusinessOwner;
use Hostelry\User\Entities\Owner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

abstract class AbstractRegistration
{
    public function __invoke(Request $request) : RedirectResponse
    {
        $businessName = $request->post('business_name');

        $business = Business::firstOrCreate(
            [
                'name' => $businessName,
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
            'activation_code' => Str::random(32),
        ]);

        BusinessOwner::firstOrCreate([
            'business_id' => $business->id,
            'owner_id' => $owner->id,
        ]);

        return redirect()->route('dashboard.verification', compact('owner'));
    }
}
