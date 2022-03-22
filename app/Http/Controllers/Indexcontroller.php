<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function home(){
        return view('component.index');
    }
}
