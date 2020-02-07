<?php

declare(strict_types=1);

namespace App\Mail;

use Hostelry\User\Entities\Owner;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

final class AccountConfirmation extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $owner;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Owner $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.account.confirmation', ['owner' => $this->owner]);
    }
}
