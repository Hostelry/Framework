<?php

declare(strict_types=1);

namespace Hostelry\Booking\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

final class SignInRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'username' => "required|string",
            'password' => "required|string",
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return Auth::guest();
    }

    public function isAuthenticated() : bool
    {
        return Auth::guard('booking')->attempt([
            'username' => $this->username,
            'password' => $this->password,
        ]);
    }
}
