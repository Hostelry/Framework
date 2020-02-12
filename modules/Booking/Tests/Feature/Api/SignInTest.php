<?php

namespace Hostelry\Booking\Tests\Feature\Api;

use Hostelry\Business\Entities\Branch;
use Hostelry\User\Entities\Employee;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class SignInTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function shouldReturnUserDetailUponAuthentication()
    {
        $branch = factory(Branch::class)->create(['name' => $this->faker->company]);
        $employee = factory(Employee::class)->create(['branch_id' => $branch->id]);
        $payload = [
            'username' => $employee->username,
            'password' => 'secret',
        ];

        $response = $this->post(route('api.booking.signin'), $payload);

        $response->assertExactJson([
            'success' => true,
            'token' => $employee->api_token,
        ]);
    }

    /**
     * @test
     */
    public function shouldReturnUnsuccessfulIfUserCredentialsIsInvalid() : void
    {
        $branch = factory(Branch::class)->create(['name' => $this->faker->company]);
        $employee = factory(Employee::class)->create(['branch_id' => $branch->id]);
        $payload = [
            'username' => $employee->username,
            'password' => 'invalid-password',
        ];

        $response = $this->post(route('api.booking.signin'), $payload);

        $response->assertExactJson([
            'success' => false,
        ]);
    }
}
