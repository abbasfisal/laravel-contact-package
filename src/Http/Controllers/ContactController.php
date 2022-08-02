<?php

namespace Abbasfisal\Contact\Http\Controllers;


use Abbasfisal\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {

        return view('abc::contact');
    }

    public function store(Request $request)
    {

        Contact::create($request->all());
        return redirect(route('contact-form'));
    }
}
