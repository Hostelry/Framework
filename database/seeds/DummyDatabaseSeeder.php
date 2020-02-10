<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use Hostelry\User\Entities\Owner;
use Hostelry\Business\Entities\Business;
use Hostelry\Business\Entities\BusinessOwner;

final class DummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        $owner = factory(Owner::class)->create();
        $business = factory(Business::class)->create();

        BusinessOwner::firstOrCreate([
            'business_id' => $business->id,
            'owner_id' => $owner->id,
        ]);
    }
}
