<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        session([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'negara' => $request->negara,
            'bahasa' => $request->bahasa,
            'bio' => $request->bio,
        ]);

        // Redirect ke halaman welcome
        return redirect()->route('welcome');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
