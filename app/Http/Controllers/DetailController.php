<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $viewData = [];
        $viewData["title"] = "Détails de contact";
        $details = Detail::latest()->get();

        return view('apropos.details', compact('details'))->with("viewData", $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        $detail->email = $request->email;
        $detail->telephone = $request->telephone;
        $detail->adresse = $request->adresse;
        $detail->title1 = $request->title1;
        $detail->title12 = $request->title12;
        $detail->title2 = $request->title2;
        $detail->title22 = $request->title22;
        $detail->title3 = $request->title3;
        $detail->title32 = $request->title32;
        $detail->facebook = $request->facebook;
        $detail->twitter = $request->twitter;
        $detail->linkedin = $request->linkedin;
        $detail->youtube = $request->youtube;
        
        $detail->save();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('image-slide', $imageName);
            $detail->img1 = $imageName;
        }
 
        $detail->save(); 

        if ($request->hasFile('image1')) {
            $imageName = time().'.'.$request->image1->extension();
            $request->image1->move('image-slide', $imageName);
            $detail->img2 = $imageName;
        }
 
        $detail->save(); 

        if ($request->hasFile('image2')) {
            $imageName = time().'.'.$request->image2->extension();
            $request->image2->move('image-slide', $imageName);
            $detail->img3 = $imageName;
        }
 
        $detail->save(); 

        return redirect()->back()->with('success', 'Mofifications enregistrées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        //
    }
}
