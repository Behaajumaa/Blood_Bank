<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class SearchController extends Controller
{
    //
    public function search(Request $request)
    {

        $country  =$request->country;
        $city     =$request->city;
        $category =$request->category;

        $users = User::where([
            ['category',   $category ],
            ['country',   $country ],
            ['city',   $city]

        ])->get();
    
        return view('viewActiveDonors',[
          'users'=> $users
      
        ]);

     }
}
