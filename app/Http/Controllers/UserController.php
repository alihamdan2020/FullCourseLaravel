<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller
{
    public function index(){
        $allusers=User::all();
        return view('components',['alluser'=>$allusers]);
    }

    public function create(){
        return view('users/register');
    }

    public function store(Request $req){
        $formFields=$req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3|confirmed'
        ]);
        $formFields['password']=bcrypt($formFields['password']);
        $user=User::create($formFields);
        
        //this code below mean this user after signup is logged in
        auth()->login($user);
        
        return redirect('/listings')->with('message','your subscribe was done succefully');
    }

    public function logout(Request $req){
        auth()->logout();
        return redirect('/listings')->with('message','you are now logged out');
        // in case your logout was a form (return to layout.blade.php)
        // your function should has (Request $req)
        // after auth()->logout(); it is recommended to regenerate the token (security issue)
        // and invalid all user session by the following codes
        // $req->session()->invalidate();
        // $req->session()->regenerateToken();
    }
    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $req){
        
        $formFields=$req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($formFields)){
            session(['id' =>auth::id()]);
            $req->session()->regenerate();
            return redirect('/listings')->with('message','you are now logged in');
        }
        return back()->withErrors(['email'=>'invalid credentials','password'=>'wrong password'])->withInput();
        //like validation in form, but in case wrong email and wrong password
        // return back()->withErrors(['email'=>'invalid credentials'])->onlyInput('email');
        //code above mean, pply only on eamil input, and i pass only 1 value in the array
    }

    

}
