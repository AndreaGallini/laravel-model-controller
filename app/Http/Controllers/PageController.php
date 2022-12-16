<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    $movie = Movie::all;
    return view('/',compact('movie'));
}
