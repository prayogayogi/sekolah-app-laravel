<?php

namespace App\Http\Controllers;

use App\Headmaster;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // UntuK Dashboard
    public function index()
    {
        return view('pages.pagesAdmin.dashboard');
    }


    // Unutk Show
    public function show(User $user)
    {
        return $user;
    }


    // untuk create
    public function create(Request $request, User $user)
    {
        User::where('id', $user->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        return redirect()->back();
    }
}
