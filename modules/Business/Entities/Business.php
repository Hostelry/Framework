<?php

declare(strict_types=1);

namespace Hostelry\Business\Entities;

use Illuminate\Database\Eloquent\Model;

final class Business extends Model
{
    protected $fillable = ['name', 'slug'];
}
