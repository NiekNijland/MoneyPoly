<?php

namespace App\Notifications;

use App\Mail\Auth\ResetPasswordEmail;
use App\Models\Employee\{Employee, PasswordResetToken};
use Illuminate\{
    Bus\Queueable,
    Contracts\Queue\ShouldQueue,
    Mail\Mailable,
    Notifications\Notification
};

final class PasswordResetNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @description Create a new notification instance.
     * @return void
     */
    public function __construct(private PasswordResetToken $token) { }

    /**
     * @description Get the notification's delivery channels.
     * @return array
     */
    public function via(): array
    {
        return ['mail'];
    }

    /**
     * @description Get the mail representation of the notification.
     * @param Employee $employee
     * @return Mailable
     */
    public function toMail(Employee $employee): Mailable
    {
        return (new ResetPasswordEmail($this->token))->to($employee->email);
    }

    public function viaQueues(): array
    {
        return [
            'mail' => 'mails',
        ];
    }
}
