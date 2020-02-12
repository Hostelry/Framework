<?php

declare(strict_types=1);

namespace Hostelry\User\Entities;

use Illuminate\Foundation\Auth\User;

class Employee extends User
{
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'branch_id', 'username', 'password'];

    protected $hidden = ['id', 'password', 'created_at', 'updated_at'];
}
