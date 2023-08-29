<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacter()
    {
        return view('vitrine.contact');
    }
}
