<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function home(){
        return view('component.index');
    }
    public function Adminform(){
        return view('admin.component.adminform');
    }
    public function Adminindex(){
        $userrole = Auth::user()->role;
    if($userrole=='1'){
        return view('admin.adminhome');
    }
    else{
        return redirect('/');
    }
    
    }
}
