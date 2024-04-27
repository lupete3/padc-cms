<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Liste des compte des dons";
        $viewData['comptes'] = Compte::latest()->get();
        
        return view('comptes.index')->with("viewData", $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData["title"] = "Ajouter un compte";
        
        return view('comptes.create')->with("viewData", $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'numero' => 'required',
        ]);

        $compte = new Compte();
        $compte->title = $request->title;
        $compte->number = $request->numero;

        $compte->save();

        return redirect()->route('comptes.create')->with('success', 'Compte ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Compte $compte)
    {
        $viewData = [];
        $viewData["title"] = "Modification compte";
        
        return view('comptes.edit', compact('compte'))->with("viewData", $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function dons()
    {
        $viewData = [];
        $viewData["title"] = "Faire un don";
        $viewData['comptes'] = Compte::latest()->get();
        
        return view('comptes.all')->with("viewData", $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compte $compte)
    {
        $request->validate([
            'title' => 'required',
            'numero' => 'required',
        ]);

        $compte->title = $request->title;
        $compte->number = $request->numero;

        $compte->save();

        return redirect()->back()->with('success', 'Compte modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compte $compte)
    {

        $compte->delete();

        return redirect()->back()->with('success', 'Compte supprimé avec succès');
    }
}
