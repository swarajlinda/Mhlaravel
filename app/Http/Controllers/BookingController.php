<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Exception;
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
            "email" => 'required|email',
            "resdate" => "required|string",
            "quantity" => "required|integer"
        ]);
        try {
            $dates = explode('/', $req->resdate);
            $checkIn = trim($dates[0]);
            $checkOut = trim($dates[1]);
            $mBooking = new Booking();
            $mBooking->create([
                'name' => $req->name,
                'mobile' => $req->phone,
                'email' => $req->email,
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'guests' => $req->quantity,
                'room_type' => $req->roomType,
            ]);
            return back()->with('success', 'Booking Successfully Completed');
        } catch (Exception $e) {
        }
    }
}
