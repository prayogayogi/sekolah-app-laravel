<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginAuth()
    {
        return view('pages.auth.login');
    }

    public function dashboard(Request $request)
    {
        $auth =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($auth)) {
            return redirect('/admin/dashboard');
        }
        return redirect('/auth/login');
    }

    // public function logOut()
    // {
    //     Auth::logout();
    //     return redirect('/auth/login');
    // }


    public function userLogin()
    {
        $user = User::all();
        return view('pages.pagesAdmin.user.userLogin', compact('user'));
    }


    // untul tambah user yang login
    public function user(Request $request)
    {
        User::create($request->all());
        return redirect()->back();
    }
}
