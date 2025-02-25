<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmation;
use App\Mail\BookingRequest;
use App\Models\Booking;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

        $myMail = env("MAIL_USERNAME");
        try {
            $dates = explode('/', $req->resdate);
            $checkIn = trim($dates[0]);
            $checkOut = trim($dates[1]);
            $mBooking = new Booking();
            $booking = $mBooking->create([
                'name' => $req->name,
                'mobile' => $req->phone,
                'email' => $req->email,
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'guests' => $req->quantity,
                'room_type' => $req->roomType,
            ]);

            try{
                Mail::to($req->email)->send(new BookingConfirmation($booking));
                Mail::to($myMail)->send(new BookingRequest($booking));
            }catch(Exception $e){
                Log::error($e->getMessage());
            }
            return back()->with('success', 'Booking Successfully Completed');
        } catch (Exception $e) {
        }
    }


    // 
    public function bookingRequests()
    {
        $bookings = Booking::getAllBookings();
        return view('admin.bookings.booking-reqs', [
            'bookings' => $bookings
        ]);
    }
}
