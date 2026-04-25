<?php

namespace App\Notifications;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class ContactFormSubmitted extends Notification implements ShouldQueue
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
            ->subject('We received your message — Tarbiya.me')
            ->greeting('Salam Alaikum '.$this->submission->name.',')
            ->line('Jazakallahu khair for reaching out to Tarbiya.me. We have received your message and will get back to you as soon as possible, in shaa Allah.')
            ->line('For your reference, here is a copy of what you sent:')
            ->line('Subject: '.$this->submission->subject)
            ->line($this->submission->message)
            ->salutation(new HtmlString("Wassalam alaikum,\n\nThe Tarbiya.me Team"));
    }
}
