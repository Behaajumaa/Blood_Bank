<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
 //   protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'phone'=> ['required','integer'],
    //         'category'=>['required'],
    //         'country' => ['required'],
    //         'city' => ['required'],
    //         'active'=>['required'],


        
        
        
    //         ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function register(array $data)
    // {
    //    return User::create([
    //          'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
// $user =User::create([
//              'name' => $data['name'],
//             'email' => $data['email'],
//             'phone'=>    $date['phone'],
//             'category'=> $data['category'],
//             'country' => $data['country'],
//             'city' =>    $data['city'],
//             'active'=>   $data['active'],
//             'password' => Hash::make($data['password']),
//         ]);
//         return redirect()->route('/');

    // }

    public function register(Request $request)
        {
                $validator = Validator::make($request->all(), [
                    'name' => ['required', 'string', 'max:255'],
                            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                            'password' => ['required', 'string', 'min:6'],
                            'phone'=> ['required'],
                            'category'=>['required'],
                            'country' => ['required'],
                            'city' => ['required'],
                            'active'=>['required']
            ]);

           if($validator->fails()){
                    return response()->json($validator->errors()->toJson(), 400);
            }

            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
            
                'phone'=>   $request->get('phone'),
                'category'=>$request->get('category'),
                'country' => $request->get('country'),
                'city' =>    $request->get('city'),
                'active'=>  $request->get('active'),
                 
            ]);


  return  view('/welcome');
}
}