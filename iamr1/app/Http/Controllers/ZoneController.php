<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Liste des zones";
        $viewData['zones'] = Zone::latest()->get();
        
        return view('zones.index')->with("viewData", $viewData);
    }

    public function zones()
    {
        $viewData = [];
        $viewData["title"] = "Nos zones d'intervention";
        $viewData['zones'] = Zone::latest()->get();
        
        return view('zones.all')->with("viewData", $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData["title"] = "Ajouter une zone";

        return view('zones.create')->with('viewData', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $zone = new Zone();

        $imageName = null;

        if($request->hasFile('image')){
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move('image-zone', $imageName);

        }

        $zone->title = $request->title;
        $zone->slug = Str::slug($request->title);
        $zone->description = $request->description;
        $zone->image = $imageName;

        $zone->save();

        return redirect()->route('zones.create')->with('success', 'Zone ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zone $zone)
    {
        $viewData = [];
        $viewData["title"] = "Modification zone";
        
        return view('zones.edit', compact('zone'))->with("viewData", $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function single(Zone $slug)
    {
        $zone = $slug;
        $viewData = [];
        $viewData["title"] = "".$zone->title;
        $viewData['zones'] = Zone::latest()->get();
        
        return view('zones.single', compact('zone'))->with("viewData", $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zone $zone)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $zone->title = $request->title;
        $zone->slug = Str::slug($request->title);
        $zone->description = $request->description;

        $zone->save();
        
        if($request->hasFile('image')){
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move('image-zone', $imageName);
            $zone->image = $imageName;

        }

        $zone->save();

        return redirect()->back()->with('success', 'Zone modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zone $zone)
    {
        $zone->delete();

        return redirect()->back()->with('success', 'Zone supprimée avec succès');
    }
}
