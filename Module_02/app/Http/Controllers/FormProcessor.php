<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $user = ["last_name" => $request->last_name, "first_name" => $request->first_name, "email" => $request->email];

        // return response()->json($user);
        return view('user', ['user' => $user]);
    }
}
