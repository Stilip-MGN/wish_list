<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Context;


class RegistrationControll extends Controller
{
    public function submit(Request $request ){
        $validation = $request->validate([
            "name" => "required|min:4|max:15",
            "password" => "required|min:6|max:15",
            "email" => "required",
        ]);

        $contact = new users();
        $contact->name = $request->input("name");
        $contact->email = $request->input("email");
        $contact->password = $request->input("password");
        $contact->remember_token = $request->input("_token");
        $contact->save();

        return redirect() ->route("home");
    }
}
