<?php

namespace App\Notifications;

use App\Models\WaitingList;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class WaitingListSubscribed extends Notification implements ShouldQueue
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
            ->subject('Welcome to the Tarbiya.me Wait List')
            ->greeting('Salam Alaikum,')
            ->line('Jazakallahu khair for subscribing to the wait list of Tarbiya.me')
            ->line('At Tarbiya, we are building the one-stop Islamic learning platform for all ages and levels where you can track your progress, solve puzzles, quizzes, and a rich library of interactive content to engage you in your journey of knowledge.')
            ->line('However, the core of Tarbiya lies in authenticity. Our platform is built upon knowledge that is authentically reported from the glorious Qur\'an, the Sunnah of our beloved Messenger (sallahu alaihi wasallam), and the methodology of the first three generations of Islam, known for their excellence.')
            ->line('We will provide you with timely updates on the development of the platform, and may Allah the Most High keep our families and us upon righteous Tarbiya.')
            ->salutation(new HtmlString('Wassalam alaikum,<br>The Tarbiya.me Team<br>Radwan Ali Sultan<br>Founder & CEO<br>Tarbiya.me'));
    }
}
