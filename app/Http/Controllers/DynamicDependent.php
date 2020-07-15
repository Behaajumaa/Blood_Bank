<?php

//DynamicDepdendent.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Country_state_city;
// use App\Country_state_city;

class DynamicDependent extends Controller
{
    function index()
    {
     $country_list = Country_state_city::table('country_state_city')
         ->groupBy('country')
         ->get();
     return view('dynamic_dependent')->with('country_list', $country_list);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = Country_state_city::table('country_state_city')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}

?>