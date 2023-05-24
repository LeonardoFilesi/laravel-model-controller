<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie; 

class HomeController extends Controller
{
   public function index() 
   {
    $movies = Movie::all();
    return view('welcome', compact('movies'));
   }
}
