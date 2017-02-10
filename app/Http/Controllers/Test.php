<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    //
    public function index()
    {
       echo "gagaga<br>"; 
       
       return view('test1');
        
       // return view('home');
    }
}
