<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Liste des faqs";
        $viewData['faqs'] = Faq::latest()->get();
        
        return view('faq.index')->with("viewData", $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData["title"] = "Ajouter un faq";
        
        return view('faq.create')->with("viewData", $viewData);
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

        $faq = new Faq();

        $faq->title = $request->title;
        $faq->description = $request->description;

        $faq->save();

        return redirect()->route('faq.create')->with('success', 'faq ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        $viewData = [];
        $viewData["title"] = "Modification faq";
        
        return view('faq.edit', compact('faq'))->with("viewData", $viewData);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $faq->title = $request->title;
        $faq->description = $request->description;

        $faq->save();

        return redirect()->back()->with('success', 'faq modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->back()->with('success', 'faq supprimée avec succès');
    }
}
