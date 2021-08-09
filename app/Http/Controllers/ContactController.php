<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show() {
        return view('website.contact');
    }
    public function store(ContactRequest $request){
        Mail::to($request->email)->send(new Contact($request));
        return redirect('/');
    }
}
