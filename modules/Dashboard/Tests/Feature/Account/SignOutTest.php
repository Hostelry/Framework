<?php

declare(strict_types=1);

namespace Hostelry\Dashboard\Tests\Feature\Account;

use Hostelry\User\Entities\Owner;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class SignOutTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @test
     */
    public function shoudlRedirectToLoginPage() : void
    {
        $owner = factory(Owner::class)->create();

        $this->actingAs($owner, 'dashboard')->from(route('dashboard.index'))
            ->post(route('dashboard.logout'), [])
            ->assertRedirect(route('dashboard.login'));
    }
}
