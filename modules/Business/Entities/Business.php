<?php

declare(strict_types=1);

namespace Hostelry\Business\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

final class Business extends Model
{
    protected $fillable = ['name', 'slug'];
    protected $hidden = ['id', 'slug', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setupBranch() : Branch
    {
        return Branch::firstOrCreate([
            'code' => Str::uuid()->toString(),
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'business_id' => $this->id,
        ]);
    }
}
