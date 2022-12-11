<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Models\Projet;
class ProjetsController extends Controller
{
    //
    public function index ()
    {
        return view('projets.index', [
            'projets' => Projet::orderBy('dateCreation', 'DESC')
                ->paginate(5)
        ]);
    }

    public function show(Projet $projet)
    {
        return view('projets.show',compact('projet'));
    }
}
