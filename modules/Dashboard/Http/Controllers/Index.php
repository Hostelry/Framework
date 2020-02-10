<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Http\Controllers;

use Hostelry\Business\Entities\Business;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class Index extends Controller
{
    public function __invoke(Request $request) : View
    {
        $businesses = Business::join('business_owners', 'business_owners.business_id', 'businesses.id')
            ->where('business_owners.owner_id', "=", $request->user('dashboard')->id)
            ->get('businesses.*')
            ->unique();

        return view('dashboard::index', compact('businesses'));
    }
}
