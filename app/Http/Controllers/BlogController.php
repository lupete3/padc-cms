<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Liste des projets";
        $viewData['blogs'] = Blog::with('category')->get();
        
        return view('blogs.index')->with("viewData", $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viewData = [];
        $viewData["title"] = "Ajouter un article";
        $viewData['categories'] = Category::all();
        
        return view('blogs.create')->with("viewData", $viewData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:[png,jpeg,png,jpg,gif]',
            'category_id' => 'required',
        ]);

        $blog = new Blog();

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;
        $blog->equipe = $request->equipe;

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move('image-blog', $imageName);

        $blog->image = $imageName;

        $blog->save();

        return redirect()->route('blogs.create')->with('success', 'Projet publié avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $viewData = [];
        $viewData["title"] = "Modification projet";
        $viewData['categories'] = Category::all();
        
        return view('blogs.edit', compact('blog'))->with("viewData", $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // Update blog in blogs table
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;
        $blog->equipe = $request->equipe;

        $blog->save();

       if ($request->hasFile('image')) {
           $imageName = time().'.'.$request->fichier->extension();
           $request->fichier->move('image-blog', $imageName);
           $blog->image = $imageName;
       }

       $blog->save();  

       return redirect()->back()->with('success', 'Projet modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->back()->withErrors('success', 'Projet supprimé avec succès');
    }
}
