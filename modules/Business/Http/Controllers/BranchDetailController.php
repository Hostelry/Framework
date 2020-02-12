<?php

declare(strict_types=1);

namespace Hostelry\Business\Http\Controllers;

use Hostelry\Business\Entities\Branch;
use Hostelry\Business\Entities\Business;
use Hostelry\Room\Entities\Room;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class BranchDetailController extends Controller
{
    public function __invoke(Business $business, Branch $branch, Request $request) : View
    {
        $rooms = Room::whereBranchId($branch->id)->get();
        return view('business::branch.detail', compact('business', 'branch', 'rooms'));
    }
}
