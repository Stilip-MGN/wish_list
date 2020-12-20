<?php

namespace App\Http\Controllers;

use App\User;
use App\users;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SignControll extends Controller
{
    public function submit(Request $request ){
        $validation = $request->validate([
            "user_name" => "required",
            "user_password" => "required"
        ]);

        $name = $request->input("user_name");
        $password = $request->input("user_password");

        $data_people = users::all();
        foreach ($data_people as $man){
            if($man->name == $name and $man->password == $password){
                return redirect()->route("home")->with("success", "Вы вошли в ваш профиль!");
            }
        }
        return redirect()->route("sign")->with("fatal", "Неверное имя или пароль!");
    }
}
