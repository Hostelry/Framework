<?php

declare(strict_types=1);

namespace Hostelry\User\Entities;

use Hostelry\Business\Entities\Business;
use Hostelry\Business\Entities\BusinessOwner;
use Illuminate\Foundation\Auth\User;

final class Owner extends User
{
    protected $fillable = [
        'code',
        'username',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'activation_code',
        'api_token',
        'remember_token',
    ];

    protected $hidden = [
        'id',
        'code',
        'password',
        'activation_code',
        'is_validated',
        'created_at',
        'updated_at',
    ];

    public function getRouteKeyName()
    {
        return 'code';
    }

    public function isValidated() : bool
    {
        return (bool) $this->is_validated;
    }

    public function addBusiness(Business $business) : void
    {
        BusinessOwner::firstOrCreate([
            'business_id' => $business->id,
            'owner_id' => $this->id,
        ]);
    }
}
