<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\SendMailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    public function index(){
        return view("index");
    }
    public function login(){
        return view("auth.login");
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('portfolio');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(){

        return view("auth.register");
    }
    public function store(Request $request){
        $this->validate($request,[
            "email"=> "required|email",
            "name"=>"required|min:5",
            "password"=> "required|min:3"
        ]);
        User::create($request->all());

        $data =[
            "name"=>"Register Account",
            "subject"=>"Register Account",
            "body"=> "Selamat, Anda telah teregistrasi pada halaman Tohska Portofolio",
        ];
        $data['email']=$request['email'];
        dispatch(new SendMailJob($data));
        return redirect("/login")->with("success","Account created, please login");
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
   
}
