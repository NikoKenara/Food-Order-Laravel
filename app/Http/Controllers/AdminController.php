<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('auth.admin.login');
    }
    public function login(Request $request){
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
         return redirect()->route('admin.dashboard')->with('success', 'Login Succesfully!');
        } else{
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function dashboard(){
        return view('admin-dashboard');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect()->route('admin.login.index');

    }
}
