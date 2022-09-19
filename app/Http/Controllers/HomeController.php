<?php

namespace App\Http\Controllers;

use App\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
    
        return view('layouts.home', compact('movies'));

    }

}