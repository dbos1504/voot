<?php

namespace App\Http\Controllers;

use App\Newsletter;

class NewsletterController extends Controller
{
    public function store()
    {
        $podaci = request()->validate([
            'newsletter' => 'required|unique:newsletters',
        ]);

        Newsletter::create($podaci);

        return back();
    }
}
