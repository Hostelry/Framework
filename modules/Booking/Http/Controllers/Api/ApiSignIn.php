<?php

declare(strict_types=1);

namespace Hostelry\Booking\Http\Controllers\Api;

use Hostelry\Booking\Http\Requests\Api\SignInRequest;
use Hostelry\User\Entities\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class ApiSignIn extends Controller
{
    public function __invoke(SignInRequest $request) : JsonResponse
    {
        if ($request->isAuthenticated()) {
            $employee = $this->getEmployee();
            return response()->json(['success' => true, 'token' => $employee->token()]);
        }

        return response()->json(['success' => false]);
    }

    public function getEmployee() : Employee
    {
        return Auth::guard('booking')->user();
    }
}
