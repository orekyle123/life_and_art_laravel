<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
class AuthManeger extends Controller
{
    

    public function login(){

            if(Auth::check()){
                return redirect(route('home'));
            }
        return view('login');

    }


    public function register(){
        if(Auth::check()){
            return redirect(route('home'));
        }

        return view('registration');

    }

    public function loginPost(Request $data){

      $data->validate([

        'email' => 'required',
        'password' => 'required'


      ]);


      $credentials = $data->only('email','password');

      if(Auth::attempt($credentials)){
                return redirect()->intended(route('home'));
      }

      return redirect(route('login'))->with("error", "Login datails are not valid");

    }


    public function registerPost(Request $data){


            $data->validate([
                'name' => 'required|max:25',
                'email' => 'required|email|unique:users',
                'contact' => ' required|numeric|digits:11',
                'address' => ' required',
                'password' => 'required|min:6'

 
            ]);

            $info['name'] = $data->name;
            $info['email'] = $data->email;
            $info['contact'] = $data->contact;
            $info['address'] = $data->address;
            $info['password'] = Hash::make($data->password);
            $user = User::create($info);

            if(!$user){
                return redirect(route('register'))->with("eror", "Registrion faild, try again.");
            }

                return redirect(route('login'))->with("success", "Account Register need to log in.");
    }


    public function logout(Request $request){
      $request->session()->flush();
       Auth::logout();
        return redirect(route('login'));
    }
}
