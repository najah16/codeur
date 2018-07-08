<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function show()
    {
    	return view('pages.connexion');
    }
}
