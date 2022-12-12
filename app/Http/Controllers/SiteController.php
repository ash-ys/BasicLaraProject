<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function feedback(){
        return view('feedback');
    }
    public function home(){
        return view('home');
    }
    public function services(){
        return view('service');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function gallery(){
        return view('gallery');
    }
    public function contact(){
        return view('contact');
    }
    public function works(){
        return view('works');
    }
}
