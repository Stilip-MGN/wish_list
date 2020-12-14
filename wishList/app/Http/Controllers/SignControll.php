<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignControll extends Controller
{
    public function submit(Request $request ){
        $validation = $request->validate([
            "user_name" => "required",
            "user_password" => "required"
        ]);


    }
}
