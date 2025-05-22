<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Make sure this is imported if you're using it

class WelcomeController extends Controller
{
    /**
     * Display the welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Handle the contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendContactMessage(Request $request)
    {
        // 1. Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'description' => 'required|string',
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
