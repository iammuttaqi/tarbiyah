<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Models\WaitingList;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function indexPost(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:waiting_lists,email'],
        ]);

        WaitingList::create($validated);

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

        ContactSubmission::create($validated);

        return response()->json([
            'message' => 'Thanks! Your message has been sent.',
        ]);
    }
}
