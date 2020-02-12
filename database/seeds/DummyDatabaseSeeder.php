<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use Hostelry\User\Entities\Owner;
use Hostelry\Business\Entities\Business;
use Hostelry\User\Entities\Employee;
use Hostelry\User\Entities\User;

final class DummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        $owner = factory(Owner::class)->create(['username' => 'owner@example.com']);
        $business = factory(Business::class)->create();

        $owner->addBusiness($business);

        $branch = $business->setupBranch();
        $branch->setupNumberOfRoomsWithBaseRate(10, ['hours' => 3, 'rate' => 250.00]);

        $employee = factory(Employee::class)->create(['username' => 'employee', 'branch_id' => $branch->id]);

        User::firstOrCreate(['username' => $owner->username, 'api_token' => $owner->api_token]);
        User::firstOrCreate(['username' => $employee->username, 'api_token' => $employee->api_token]);
    }
}
