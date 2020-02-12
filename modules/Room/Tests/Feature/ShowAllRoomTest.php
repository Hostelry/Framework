<?php

declare(strict_types=1);

namespace Hostelry\Room\Tests\Feature;

use Hostelry\Business\Entities\Branch;
use Hostelry\Room\Entities\Room;
use Hostelry\User\Entities\Employee;
use Hostelry\User\Entities\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class ShowAllRoomTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function userWithValidApiTokenCanViewAllRooms() : void
    {
        // arrange
        $rate = ['hours' => 3, 'rate' => 250.00];

        $branch = factory(Branch::class)->create(['name' => $this->faker->company]);
        $branch->setupNumberOfRoomsWithBaseRate(1, $rate);

        $employee = factory(Employee::class)->create(['branch_id' => $branch->id]);
        User::create(['username' => $employee->username, 'api_token' => $employee->token()]);

        $room = Room::whereBranchId($branch->id)->first(); // we will only get one room instance for validation

        // act
        $response = $this->getJson(route('api.rooms.show.all', ['api_token' => $employee->token()]));

        // assert
        $response->assertExactJson([
            'success' => true,
            'data' => [
                [
                    'code' => $room->code,
                    'number' => (string) $room->number,
                    'rates' => [
                        [
                            'hours' => $rate['hours'],
                            'rate' => $rate['rate'],
                        ]
                    ]
                ],
            ]
        ]);
    }

    /**
     * @test
     */
    public function cannotViewRoomsWhenTokenIsInvalid() : void
    {
        $this->getJson(route('api.rooms.show.all', ['api_token' => 'invalid-token']))
            ->assertExactJson([
                'message' => 'Unauthenticated.',
            ]);
    }
}
