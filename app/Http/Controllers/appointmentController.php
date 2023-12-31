<?php

namespace App\Http\Controllers;

use App\Models\Appoiontment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class appointmentController extends Controller
{
    public function bookappointment(Request $req){
        $formFields = $req->validate([
            "name" => ['required'],
            "age" => ['required'],
            "contact" => ['required'],
            "email" => ['required'],
            "disease" => ['required'],
            "datetime" => ['required'],
            "doc_id" => ['required'],
        ]);

        Appoiontment::create($formFields);
        // echo "done";
        return back();

    }
   
}
