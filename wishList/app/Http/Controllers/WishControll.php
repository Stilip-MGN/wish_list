<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use App\Wish;

class WishControll extends Controller
{
    public function submit(Request $request )
    {

        $validation = $request->validate([
            "wish" => "required"
        ]);

        $contact = new Wish();
        $contact->wish_text = $request->input("wish");
        $contact->user_id = 1;
        $contact->save();

        return redirect()->route("home");
    }
}
