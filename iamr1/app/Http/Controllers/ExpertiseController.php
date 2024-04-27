<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData["title"] = "Nos expertises";
        $viewData['expertises'] = Expertise::all();

        return view('expertise.index')->with('viewData', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData["title"] = "Ajouter une expertise";

        return view('expertise.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('image-expertise', $imageName);
            $image = $imageName;
        }

        Expertise::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image
        ]);

        return redirect()->route('expertises.create')->with('success', 'Expertise enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expertise $expertise)
    {
        $viewData = [];
        $viewData["title"] = "Modification expertise";
        $expertises = $expertise;

        return view('expertise.edit', compact('expertises'))->with("viewData", $viewData);
    }

    public function expertises()
    {
        $viewData = [];
        $viewData["title"] = "IAMR Asbl | Expertises";
        $viewData['expertises'] = Expertise::latest()->paginate(9);
        
        return view('expertise.all')->with("viewData", $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function showSingle(Expertise $expertise)
    {
        $viewData = [];
        $viewData["title"] = "IAMR Asbl | ".$expertise->title;
        $viewData['expertises'] = Expertise::latest()->paginate(4);
        
        return view('expertise.single',compact('expertise'))->with("viewData", $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expertise $expertise)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        // Update blog in blogs table
        $expertise->title = $request->title;
        $expertise->description = $request->description;
        $expertise->save();

       if ($request->hasFile('image')) {
           $imageName = time().'.'.$request->image->extension();
           $request->image->move('image-expertise', $imageName);
           $expertise->image = $imageName;
       }

       $expertise->save(); 

       return redirect()->back()->with('success', 'Modifications appliquée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expertise $expertise)
    {
        $expertise->delete();

        return redirect()->back()->with('success', 'Expertise supprimée avec succès');

    }
}
