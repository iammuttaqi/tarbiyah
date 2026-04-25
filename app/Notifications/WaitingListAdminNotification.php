<?php

namespace App\Notifications;

use App\Models\WaitingList;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WaitingListAdminNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public WaitingList $waitingList) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Wait List Subscription')
            ->line('A new person has subscribed to the Tarbiya.me wait list.')
            ->line('Name: '.$this->waitingList->name)
            ->line('Email: '.$this->waitingList->email);
    }
}
