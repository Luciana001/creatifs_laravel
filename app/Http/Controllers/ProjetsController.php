<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\Projet;

class projetsController extends Controller
{
    public function index ()
    {
        return view('projets.index', [
            'projets' => Projet::orderBy('dateCreation', 'DESC')->take(5)->get()
        ]);
    }
}
