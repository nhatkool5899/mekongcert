<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() : Returntype {
        
        return view('layouts.page');
    }
}
