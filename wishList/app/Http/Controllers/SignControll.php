<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignControll extends Controller
{
    public function submit(Request $request ){
        $validation = $request->validate([
            "user_name" => "required|min:4|max:15",
            "user_password" => "required|min:6|max:15"
        ]);
    }
}
