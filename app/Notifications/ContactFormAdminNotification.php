<?php

namespace App\Notifications;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFormAdminNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public ContactSubmission $submission) {}

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
            ->subject('New Contact Form Submission: '.$this->submission->subject)
            ->replyTo($this->submission->email, $this->submission->name)
            ->line('A new contact form submission was received.')
            ->line('Name: '.$this->submission->name)
            ->line('Email: '.$this->submission->email)
            ->line('Subject: '.$this->submission->subject)
            ->line('Message:')
            ->line($this->submission->message);
    }
}
