<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function contacts(){
        return view('contacts');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function price(){
        return view('price');
    }

    public  function records()
    {
        return view('records');
    }
}
