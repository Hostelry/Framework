<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Tests\Feature\Account;

use Hostelry\User\Entities\Owner;
use Illuminate\Support\Facades\Hash;
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
    public function shouldRequireToLoginIfUserIsNotAuthenticated() : void
    {
        $this->get(route('dashboard.index'))->assertRedirect(route('dashboard.login'));
    }

    /**
     * @test
     */
    public function shouldHandleInvalidAccount() : void
    {
        $this->from(route('dashboard.login'))
            ->post(route('dashboard.login'), ['username' => "invalid-username", 'password' => "invalid-password"])
            ->assertRedirect(route('dashboard.login'));

    }

    /**
     * @test
     */
    public function shouldRedirectToDashboardUponSuccessfulAuthentication() : void
    {
        $password = 'secret';
        $owner = factory(Owner::class)->create(['password' => Hash::make($password)]);

        $this->from(route('dashboard.login'))
            ->post(route('dashboard.login'), ['username' => $owner->username, 'password' => $password])
            ->assertRedirect(route('dashboard.index'));
    }

    /**
     * @test
     */
    public function shouldNotGrantWhereUserAccountIsInvalid() : void
    {
        $owner = factory(Owner::class)->create();

        $this->from(route('dashboard.login'))
            ->post(route('dashboard.login'), ['username' => $owner->username, 'password' => 'invalid-password'])
            ->assertSessionHasErrors()
            ->assertRedirect(route('dashboard.login'));
    }
}
