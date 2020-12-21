<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use App\Wish;

class WishControll extends Controller
{
    public function submit(Request $request)
    {
        $validation = $request->validate([
            "wish" => "required"
        ]);

        $wish = new Wish();
        $wish->wish_text = $request->input("wish");
        $wish->user_id = \Auth::user()->id;
        $wish->save();

        return redirect()->route("wish");
    }

    public function redactionWish($id){
        $wish = new Wish();
        return view('redaction-wish',['data' => $wish->find($id)]);

    }

    public function redactionWishUpdate( $id, Request $request){

        \DB::table('wishes')
            ->where('id', $id)
            ->update(['wish_text' => $request->input("wish")]);
        $wish = new Wish();

        return redirect()->route("wish");
    }

    public function deleteWish($id){
        \DB::table('wishes')->where('id', $id)->delete();
        return redirect()->route("wish");
    }
}
