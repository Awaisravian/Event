<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index(){
        return view('web.index');
    }
    public function showGallery(){
        return view('web.gallery');
    }
    public function showServices(){
        return view('web.services');
    }
    public function About(){
        return view('web.about');
    }

    public function Contact(){
        return view('web.contact');
    }

}
