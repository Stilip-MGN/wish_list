<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationControll extends Controller
{
    public function submit(Request $request ){
        $validation = $request->validate([
            "name" => "required|min:4|max:15",
            "password" => "required|min:6|max:15",
            "email" => "required",
        ]);
    }
}
