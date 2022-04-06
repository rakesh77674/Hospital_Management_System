<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CreateController extends Controller
{
    Public function Create(Request $request){
        $doctor = new Doctor;
        $image = $request->image;
        $imageName =time().' . '.$image->getClientOriginalExtension();
        $request->image->move('doctorimage', $imageName);
        $doctor->image = $imageName;
        $doctor->name = $request->name;
        $doctor->speciality = $request->speciality;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->zipcode = $request->zipcode;
        $doctor->states_id = $request->states_id;
        $doctor->cities_id = $request->cities_id;
        $doctor->save();
        return redirect()->back();
    }
    public function Show(Request $request){
        $doctor = Doctor::all();
        return view('admin.component.formlist',compact('doctor'));

    }
    public function deleteblog(Request $request, $id){
       
        try {
            $post = Doctor::where('id',$id)->first();
          } catch (ModelNotFoundException $e) {
            return redirect()->route('dashboard')->with(['message'=> 'Failed']);
          }
        
          $post->delete();
        
          return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);

    }  
    public function updateblog($id){
        $doctor = Doctor::find($id);
        return view('admin.component.updateblog');
    }
}
