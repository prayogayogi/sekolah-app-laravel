<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // UntuK Dashboard
    public function index()
    {
        return view('pages.pagesAdmin.dashboard');
    }

    // View Untuk admin, tambah admin, lihat admin dan hapus admin
    public function userLogin()
    {
        $user = User::all();
        return view('pages.pagesAdmin.user.userLogin', compact('user'));
    }


    // untul tambah Admin yang login
    public function user(Request $request)
    {
        User::create($request->all());
        return redirect()->back();
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
