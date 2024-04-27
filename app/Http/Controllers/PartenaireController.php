<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData["title"] = "Nos partenaires";
        $viewData['partenaires'] = Partenaire::all();

        return view('partenaires.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData["title"] = "Ajouter un partenaire";

        return view('partenaires.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'image' => 'image',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('image-partenaire', $imageName);
            $image = $imageName;
        }

        Partenaire::create([
            'image' => $image
        ]);

        return redirect()->route('partenaires.create')->with('success', 'Partenaire enregistré avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partenaire $partenaire)
    {
        $viewData = [];
        $viewData["title"] = "Modification partenaire";

        return view('partenaires.edit', compact('partenaire'))->with("viewData", $viewData);
    }

    public function partenaires()
    {
        $viewData = [];
        $viewData["title"] = "PADC Asbl | partenaires";
        $viewData['partenaires'] = Partenaire::latest()->paginate(9);
        
        return view('partenaires.all')->with("viewData", $viewData);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        $request->validate([
            
            'image' => 'image',
        ]);

       if ($request->hasFile('image')) {
           $imageName = time().'.'.$request->image->extension();
           $request->image->move('image-partenaire', $imageName);
           $partenaire->image = $imageName;
       }

       $partenaire->save(); 

       return redirect()->back()->with('success', 'Modifications appliquée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partenaire $partenaire)
    {
        $partenaire->delete();

        return redirect()->back()->with('success', 'Partenaire supprimée avec succès');

    }
}
