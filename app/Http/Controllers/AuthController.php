<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('front_end.auth.login');
    }

    public function signUp(){
        return view('front_end.auth.signup');
    }

    public function loginPost(LoginRequest $request)
    {
        $res = [];
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            dd(Auth::check());
            if(Session::has('myTeam')){
              $res =  ["success"=>true,"url"=>route('my-team')] ;
            }else{
                $res = ["success"=>true,"url"=>route('home')];
            }  
        }else{
            $res =  ["success"=>false,"message"=>"Please enter valid email or password"];
        }
        return $res;
    }

    public function signUpPost(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password')); // Hash the password
        $user->save();

        // if(isset($user) && !empty($user)){

        //     $user = [
        //         'first_name' => $request->input('first_name'),
        //         'last_name' => $request->input('last_name'),
        //         'email' => $request->input('email'),
        //         'password' => $request->input('password'),
        //         'phone' => $request->input('phone')
        //     ];

        //     Mail::to($request->input('email'))->send(new UserRegisterMail($user));
        // }
          return ['success'=>true];
        //return redirect()->back()->with('success','You are sign up successfully!');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('home');
    }

}
