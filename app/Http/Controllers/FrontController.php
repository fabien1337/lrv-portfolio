<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class FrontController extends Controller
{
    public function homepage()
    {
        $yearsExperiences = date('Y') - 2016;
        return view('front.homepage', compact('yearsExperiences'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function postContact(ContactRequest $request)
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($request->validated()));
        // Contact::create($request->validated());

        return back()->with([
            'message' => __('master.mail_sended')
        ]);
    }

    public function locale($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return back();
    }
}
