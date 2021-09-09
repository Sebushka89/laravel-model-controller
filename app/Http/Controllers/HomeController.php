<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Film;

class HomeController extends Controller
{
    public function index(){
        $allFilms = Film::all();

        return view('home', compact('allFilms'));
    }
}
