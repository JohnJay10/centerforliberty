<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function electoralreform(){
        return view('pages.electoralreform');
    }

    public function ed(){
        return view('pages.ed');
    }

    public function dflpress(){
        return view('pages.dflpress');
    }

    public function ecowas(){
        return view('pages.press_on_ecowas');
    }

    public function digadv(){
        return view('pages.digadv');
    }

    public function aboutus(){
        return view('pages.aboutus');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function gallery(){
        return view('pages.gallery');
    }
}
