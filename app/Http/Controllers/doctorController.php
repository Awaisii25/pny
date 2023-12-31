<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class doctorController extends Controller
{
    public function adddoctor(Request $req){
        $formFields = $req->validate([
            "drname" =>['required' ],
            "drspec" =>['required'],
        ]);

        Doctor::create($formFields);
        return back()->with('message','Doctor Added Successfully!!');
    }
    // public function getdoctor(){

    //     $doctors = Doctor::all();
    //     return view('welcome',compact('doctors'));
    // }
    
   
}


