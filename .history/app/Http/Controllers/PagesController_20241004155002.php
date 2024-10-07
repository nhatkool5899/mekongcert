<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  PagesController extends Controller
{
    public function index() {
        
        return view('pages.home');
    }

    public function about(Request $request) {

        $section = $request->query('section');
        
        return view('pages.about', compact('section'));
    }

    public function services() {
        
        return view('pages.services');
    }

    public function news() {
        
        return view('pages.news');
    }
}
