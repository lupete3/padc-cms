<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Liste des catégories";
        $viewData['categories'] = Category::latest()->get();
        
        return view('categories.index')->with("viewData", $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData["title"] = "Ajouter une catégorie";
        
        return view('categories.create')->with("viewData", $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        $category->save();

        return redirect()->route('categories.create')->with('success', 'Catégorie ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $viewData = [];
        $viewData["title"] = "Modification catégorie";
        
        return view('categories.edit', compact('category'))->with("viewData", $viewData);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);

        $category->save();

        return redirect()->back()->with('success', 'Catégorie modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('success', 'Catégorie supprimée avec succès');
    }
}
