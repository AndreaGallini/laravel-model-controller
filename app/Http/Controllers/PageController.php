<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
    public function topFive()
    {

        return view('topFive');
    }
    public function todayMovie()
    {

        return view('todayMovie');
    }
}
