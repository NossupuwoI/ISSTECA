<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreinscritionController extends Controller
{
    public function aff_pre_inscripion()
    {
        return view('pre_incription.preinscription');
    }
}
