<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::to('admin@example.com')->send(new ContactMail($contact));

        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
}
