<?php

declare(strict_types=1);

namespace Hostelry\Site\Tests\Feature;

use App\Mail\AccountConfirmation;
use Hostelry\User\Entities\Owner;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class PackageRegistrationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * Plans may vary between their customized features.
     *
     * @return array
     */
    public function plans() : array
    {
        return [
            'starter_plan' => [
                'payload' => [
                    'business_name' => "Great Hotel",
                    'first_name' => "John",
                    'middle_name' => "Unknown",
                    'last_name' => "Doe",
                    'username' => "johndoe@example.com",
                    'password' => 'password',
                    'confirm_password' => 'password',
                    'business_name' => "John Doe Lodging",
                    "type" => "pensionhouse",
                    "number_of_rooms" => "40",
                ],
                'form' => 'site.pricing.starter',
                'action' => 'site.pricing.starter.registration'
            ],
            'explansion_plan' => [
                'payload' => [
                    'business_name' => "Great Hotel",
                    'first_name' => "John",
                    'middle_name' => "Unknown",
                    'last_name' => "Doe",
                    'username' => "johndoe@example.com",
                    'password' => 'password',
                    'confirm_password' => 'password',
                    'business_name' => "John Doe Lodging",
                    "type" => "pensionhouse",
                    "number_of_rooms" => "40",
                ],
                'form' => 'site.pricing.expansion',
                'action' => 'site.pricing.expansion.registration'
            ],
            'deluxe_plan' => [
                'payload' => [
                    'business_name' => "Great Hotel",
                    'first_name' => "John",
                    'middle_name' => "Unknown",
                    'last_name' => "Doe",
                    'username' => "johndoe@example.com",
                    'password' => 'password',
                    'confirm_password' => 'password',
                    'business_name' => "John Doe Lodging",
                    "type" => "pensionhouse",
                    "number_of_rooms" => "40",
                ],
                'form' => 'site.pricing.deluxe',
                'action' => 'site.pricing.deluxe.registration'
            ],
        ];
    }

    /**
     * Iterates the plans (including it's customized features and how should it be billed)
     *
     * @test
     * @dataProvider plans
     */
    public function businessEntityWasSuccessfullyRegistered(array $payload, string $form, string $action) : void
    {
        Mail::fake();
        $response = $this->from(route($form))->post(route($action), $payload);

        $this->assertDatabaseHas('businesses', ['name' => $payload['business_name']]);

        $owner = Owner::where([
            'first_name' => $payload['first_name'],
            'middle_name' => $payload['middle_name'],
            'last_name' => $payload['last_name'],
            'username' => $payload['username'],
        ])->first();

        Mail::assertQueued(AccountConfirmation::class);

        $response->assertRedirect(route('dashboard.verification', compact('owner')));
    }
}
