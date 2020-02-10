<?php

declare(strict_types=1);

namespace Hostelry\Business\Entities;

use Illuminate\Database\Eloquent\Model;

final class Branch extends Model
{
    protected $fillable = ['code', 'name', 'slug', 'business_id'];

    protected $hidden = ['id', 'coode', 'slug', 'created_at', 'updated_at'];
}
