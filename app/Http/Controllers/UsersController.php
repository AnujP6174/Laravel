<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getData(Request $req)
    {
        $req->validate([
            "username" => "required | max:10",
            "password" => "required | min:8"
        ]);
        return $req->input();
    }
}
