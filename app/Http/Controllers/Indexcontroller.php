<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class Indexcontroller extends Controller
{
    public function home(){
        return view('component.index');
    }
    public function Adminform(Request $request){
        $data = State::all();
        return view('admin.component.adminform',compact('data'));
    }
    public function Add(){
        return view('admin.component.adminform');
    }
    public function getcity(Request $request){
        $cid=$request->post('cid');
        $city=City::where('states_id',$cid)->get();
        $html='<option value="">Select city</option>';
        foreach($city as $list){
        $html.='<option value="'.$list->id.'">'.$list->city.'</option>';//display the list of each modules through the id
        }
       return $html;
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
