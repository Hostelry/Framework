<?php

declare(strict_types=1);

namespace Hostelry\Booking\Tests\Feature\Api\Booking;

use Hostelry\Booking\Events\CustomerHasCheckedIn;
use Hostelry\Business\Entities\Branch;
use Hostelry\Room\Entities\Room;
use Hostelry\User\Entities\Employee;
use Hostelry\User\Entities\User;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class CheckInTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function regularCheckIn()
    {
        // arrange
        $rate = ['hours' => 3, 'rate' => 250.00];

        $branch = factory(Branch::class)->create(['name' => $this->faker->company]);
        $branch->setupNumberOfRoomsWithBaseRate(1, $rate);

        $employee = factory(Employee::class)->create(['branch_id' => $branch->id]);
        User::create(['username' => $employee->username, 'api_token' => $employee->token()]);

        $room = Room::whereBranchId($branch->id)->first(); // we will only get one room instance for validation

        $payload = [
            'cash' => 1000.00,
            'total_amount' => 250.00,
            'change' => 750.00,
        ];

        $params = ['room' => $room, 'api_token' => $employee->token()];

        // act
        Event::fake([CustomerHasCheckedIn::class]);
        $this->postJson(route('api.booking.room.checkin', $params), $payload);

        // assert
        Event::assertNotDispatched(CustomerHasCheckedIn::class);
        $this->assertDatabaseHas('bookings', ['room' => $room->code, 'checkin_by' => $employee->username]);
    }
}
