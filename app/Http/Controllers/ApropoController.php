<?php

namespace App\Http\Controllers;

use App\Models\Apropo;
use App\Models\Faq;
use Illuminate\Http\Request;

class ApropoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData["title"] = "Qui sommes nous";

        $apropos = Apropo::latest()->get();

        $viewData['faqs'] = Faq::latest()->get();

        return view('apropos.detail',compact('apropos'))->with('viewData', $viewData);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
        $viewData["title"] = "Qui sommes nous";
        $apropos = Apropo::latest()->get();

        return view('apropos.apropo', compact('apropos'))->with("viewData", $viewData);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apropo $apropo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apropo $apropo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:[png,jpeg,png,jpg,gif]',
        ]);

        // Update blog in blogs table
        $apropo->title = $request->title;
        $apropo->apropos = $request->description;
        $apropo->save();

       if ($request->hasFile('image')) {
           $imageName = time().'.'.$request->image->extension();
           $request->image->move('image-apropo', $imageName);
           $apropo->image = $imageName;
       }

       $apropo->save(); 

       return redirect()->back()->with('success', 'Modifications appliquée avec succès');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apropo $apropo)
    {
        //
    }
}
