<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function bookRoom(Request $req)
    {
        $req->validate([
            "roomType" => "required",
            "name" => "required",
            "phone" => 'required|numeric|digits:10',
            "resdate" => "required|string",
            "quantity" => "required|integer"
        ]);

        dd($req->all());
    }
}
