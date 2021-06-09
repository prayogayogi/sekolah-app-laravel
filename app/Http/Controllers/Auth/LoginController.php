<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
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
}
