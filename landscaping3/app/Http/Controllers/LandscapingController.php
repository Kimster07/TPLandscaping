<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandscapingController extends Controller
{
    //function to return view welcome.blade.php
    public function index(){
        return view('welcome');
    }

    //function to return view about.blade.php
    public function about(){
        return view('about');
    }

    //function to return view services.blade.php
    public function services(){
        return view('services');
    }
}
