<?php

declare(strict_types=1);

namespace Hostelry\User\Entities;

use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

final class Owner extends User
{
    use Notifiable;

    protected $fillable = ['code', 'username',  'first_name', 'middle_name', 'last_name', 'activation_code'];

    protected $hidden = ['id', 'code', 'activation_code', 'is_validated', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'code';
    }

    public function isValidated() : bool
    {
        return (bool) $this->is_validated;
    }
}
