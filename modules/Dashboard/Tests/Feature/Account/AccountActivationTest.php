<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Tests\Feature\Account;

use Hostelry\User\Entities\Owner;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class AccountActivationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function verificationCodeIsValid() : void
    {
        $owner = factory(Owner::class)->create([
            'first_name' => "John",
            'middle_name' => "Unknown",
            'last_name' => "Doe",
            'username' => "johndoe@example.com",
        ]);

        $this->from(route('dashboard.verification', compact('owner')))
            ->post(route('dashboard.account.verify', compact('owner')), ['activation_code' => $owner->activation_code])
            ->assertRedirect(route('dashboard.login'));

        $owner = Owner::where($owner->toArray())->first();

        $this->assertTrue($owner->isValidated());
    }

    /**
     * @test
     */
    public function cannotProceedWithInvalidCode() : void
    {
        $owner = factory(Owner::class)->create([
            'first_name' => "John",
            'middle_name' => "Unknown",
            'last_name' => "Doe",
            'username' => "johndoe@example.com",
        ]);

        $this->from(route('dashboard.verification', compact('owner')))
            ->post(route('dashboard.account.verify', compact('owner')), ['activation_code' => 'invalid-code'])
            ->assertSessionHasErrors();
    }
}
