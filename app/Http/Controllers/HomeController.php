<?php

namespace App\Http\Controllers;

use App\Models\Apropo;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Detail;
use App\Models\Expertise;
use App\Models\Faq;
use App\Models\Partenaire;
use App\Models\Zone;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "PADC Asbl";
        $viewData['blogs'] = Blog::latest()->paginate(4);
        $viewData['expertises'] = Expertise::latest()->paginate(6);

        $viewData['apropos'] = Apropo::latest()->get();

        $viewData['details'] = Detail::latest()->get();

        $viewData['missions'] = Zone::latest()->get();

        $viewData['projets'] = Blog::latest()->paginate(3);

        $viewData['expertises'] = Expertise::latest()->get();

        $viewData['faqs'] = Faq::latest()->get();

        $viewData['partenaires'] = Partenaire::latest()->get();
        
        return view('home')->with("viewData", $viewData);
    }
    
    public function blogs()
    {
        $viewData = [];
        $viewData["title"] = "PADC Asbl | Blogs";
        $viewData['blogs'] = Blog::latest()->paginate(9);

        $viewData['categories'] = Category::all();
        
        return view('blogs.all')->with("viewData", $viewData);
    }
    
    public function show(Blog $slug)
    {
        $viewData = [];
        $viewData["title"] = "PADC Asbl | ".$slug->title;
        $blog = $slug;

        $viewData['blogs'] = Blog::latest()->paginate(3);

        $viewData['categories'] = Category::all();
        
        return view('blogs.single', compact('blog'))->with("viewData", $viewData);

    }

    public function showByCategory(Category $slug)
    {
        $viewData = [];
        $viewData["title"] = "PADC Asbl | ".$slug->name;

        $viewData['categories'] = Category::all();

        $viewData['blogs'] = Blog::where('category_id', '=', $slug->id)->paginate(9);


        return view('blogs.all')->with("viewData", $viewData);
    }
    
    
}
