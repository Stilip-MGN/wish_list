<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationControll extends Controller
{
    public function submit(Request $request ){
        $validation = $request->validate([
            "name" => "required",
            "password" => "required",
            "email" => "required",
        ]);
    }
}
