<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $reviews = User::
        return view("user.profile", [
            "title" => "Profile",
            "user" => User::where("username", $request->username)->first()
        ]);
    }
}
