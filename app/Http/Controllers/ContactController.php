<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.contact');
    }

    public function store()
    {
        $podaci = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'required',
            'inquiry' => 'required|min:3',
        ]);

        Contact::create($podaci);

        return back();

    }
}
