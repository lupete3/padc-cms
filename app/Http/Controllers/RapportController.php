<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData["title"] = "Nos rapports";
        $viewData['rapports'] = Rapport::all();

        return view('rapports.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData["title"] = "Ajouter un rapport";

        return view('rapports.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'titre' => 'required',
        ],[
            'titre.required' => 'Entrer le titre du rapport',
        ]);

        $rapport = null;

        if ($request->hasFile('rapport')) {
            $rapportName = time().'.'.$request->rapport->extension();
            $request->rapport->move('rapports', $rapportName);
            $rapport = $rapportName;
        }

        Rapport::create([
            'titre' => $request->titre,
            'rapport' => $rapport
        ]);

        return redirect()->route('rapports.create')->with('success', 'Rapport enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rapport $rapport)
    {
        $viewData = [];
        $viewData["title"] = "Modification rapport";

        return view('rapports.edit', compact('rapport'))->with("viewData", $viewData);
    }

    public function rapport()
    {
        $viewData = [];
        $viewData["title"] = "PADC Asbl | rapports";
        $viewData['rapports'] = Rapport::latest()->get();
        
        return view('rapports.all')->with("viewData", $viewData);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rapport $rapport)
    {
        $request->validate([
            
            'titre' => 'required',
        ],[
            'titre.required' => 'Entrer le titre du rapport',
        ]);

        $rapport->titre = $request->titre;

        $rapport->save();

        if ($request->hasFile('rapport')) {
            $rapportName = time().'.'.$request->rapport->extension();
            $request->rapport->move('rapports', $rapportName);
            $rapport = $rapportName;
        }

        $rapport->save(); 

       return redirect()->back()->with('success', 'Modifications appliquée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rapport $rapport)
    {
        $rapport->delete();

        return redirect()->back()->with('success', 'Rapport supprimée avec succès');

    }
}
