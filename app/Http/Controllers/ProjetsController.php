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
            'projets' => Projet::orderBy('created_at', 'DESC')
                ->paginate(5)
        ]);
    }

    public function show(Projet $projet)
    {
        return view('projets.show',compact('projet'));
    }

    public function create()
    {
        return view('projets.create');
    }

    public function store(Request $request)
    {


        // Validation
        $validated = $request->validate([
            'titre' => 'required|max:255',
            'texte' => 'alpha_num',
            'image' => 'image|mimes:jpg,gif,png',
            'creatif' => 'integer'
        ]);

        // Upload de l'image 
        $path = explode('images/', $request->file('image')->store('images'));

        $validated['image'] = $path[1];
        Projet::create($validated);


        return redirect()->route('projets.index');
    }
}

        
       
    // public function destroy(Projet $projet)
    // {
    //     Projet::destroy(['id' => $projet->id]);
    //     return view('projets.index');
    // }

