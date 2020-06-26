<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use Carbon\Carbon;



class DonorController extends Controller
{
    //
      //Get All Donors
      public function index() {
        return Donor::all(); 
        return view('file.index',[
            'donors'=> $donors,  
          ]);
    }

    //find Donor by id
    public function find($id){
        return Donor::findOrFail($id);
    }

    //Create a Donor
    public function store(Request $request){   
        return Donor::create($request->all());
    }
}
