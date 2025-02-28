<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Studio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $studios = Studio::all();

        return view('home', compact('hero', 'studios'));
    }
}
