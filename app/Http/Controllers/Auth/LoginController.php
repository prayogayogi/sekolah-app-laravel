<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('pages.auth.login');
    }

    public function login()
    {
        $attr = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($attr)) {
            return redirect()->route('admin-dashboard');
        }
    }
}
