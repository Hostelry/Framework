<?php

declare(strict_types=1);

namespace Hostelry\Business\Http\Controllers;

use Hostelry\Business\Entities\Branch;
use Hostelry\Business\Entities\Business;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class DetailController extends Controller
{
    public function __invoke(Request $request, Business $business) : View
    {
        $branches = Branch::whereBusinessId($business->id)->get();
        return view('business::detail', compact('business', 'branches'));
    }
}
