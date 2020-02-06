<?php

declare(strict_types=1);

namespace Hostelry\Business\Entities;

use Illuminate\Database\Eloquent\Model;

final class BusinessOwner extends Model
{
    protected $fillable = ['business_id', 'owner_id'];

    protected $hidden = ['id', 'created_at', 'updated_at'];
}
