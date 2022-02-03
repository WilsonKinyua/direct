<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{

    public function index()
    {
        return view('public.contact-us');
    }


    public function store(StoreContactUsRequest $request)
    {
        $contactUs = ContactUs::create($request->all());

        return redirect()->route('contact-us.index')
            ->with('success', 'Thank you for contacting us. We will get back to you shortly.');
    }

}
