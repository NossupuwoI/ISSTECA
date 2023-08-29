<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chambre;
use App\Models\Reservation;
use App\Models\Service;

class DashboardController extends Controller
{
    public function Afficher_dashboard()
    {

        return view('/dashboard');
    }
}
