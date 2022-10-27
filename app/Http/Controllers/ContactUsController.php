<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    public function contactFormView() {
        return view('contact');
    }

    public function contactFormLogic(Request $request) {
        // Validate
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required|max:255'
            ],
            [
                'name.required' => 'Name is required',
                'email.required' => 'Email Address is required',
                'message.required' => 'Message cannot be empty'
            ]
        );

        // Create data
        $create = $request->all();
        Contact::create($create);

        // Message
        return back()->with('success', 'Thank You for contacting us. Have a nice day.');
    }
}
