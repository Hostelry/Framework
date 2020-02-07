<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

final class DemoRequest extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $name;
    public $contact;
    public $email;
    public $info;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $email, string $contact, array $info, string $message = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->contact = $contact;
        $this->info = $info;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown(
            'email.client.demo-requests',
            [
                'name' => $this->name,
                'email' => $this->email,
                'contact' => $this->contact,
                'info' => $this->info,
                'message' => $this->message,
            ]
        );
    }
}
