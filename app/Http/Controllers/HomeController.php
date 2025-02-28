<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $studios = Studio::all();

        return view('home', compact('studios'));
    }
}
