<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Models\WaitingList;
use App\Notifications\ContactFormAdminNotification;
use App\Notifications\ContactFormSubmitted;
use App\Notifications\WaitingListAdminNotification;
use App\Notifications\WaitingListSubscribed;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {
        // $waiting_list = WaitingList::first();
        // return (new WaitingListSubscribed($waiting_list))->toMail($waiting_list);
        // Notification::route('mail', [$waiting_list->email => $waiting_list->name])->notify(new WaitingListSubscribed($waiting_list));

        return view('pages.index');
    }

    public function indexPost(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:waiting_lists,email'],
        ]);

        $waiting_list = WaitingList::create($validated);

        Notification::route('mail', [$waiting_list->email => $waiting_list->name])->notify(new WaitingListSubscribed($waiting_list));
        Notification::route('mail', config('mail.from.address'))->notify(new WaitingListAdminNotification($waiting_list));

        return response()->json([
            'message' => 'You have been added to the waiting list.',
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactPost(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        $submission = ContactSubmission::create($validated);

        Notification::route('mail', [$submission->email => $submission->name])
            ->notify(new ContactFormSubmitted($submission));

        Notification::route('mail', config('mail.admin_address'))
            ->notify(new ContactFormAdminNotification($submission));

        return response()->json([
            'message' => 'Thanks! Your message has been sent.',
        ]);
    }
}
