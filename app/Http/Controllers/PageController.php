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
        $topFive = Movie::where('vote', '>', 1)->orderBy('vote', 'desc')->limit(5)->get();
        return view('topFive', compact('topFive'));
    }
    public function todayMovie()
    {
        $todayMovie = Movie::where('title', 'Il Padrino')->get();

        return view('todayMovie', compact('todayMovie'));
    }
}
