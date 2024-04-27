<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Tableau de bord";
        
        return view('dashboard')->with("viewData", $viewData);
    }
}
