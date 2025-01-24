<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    //
    public function checkIn()
    {
        return view('admin.check.checkin');
    }

    // 
    public function postCheckIn(Request $req)
    {
        $visitor = Visitor::create([
            "check_in_date" => $req->checkInDate,
            "check_in_time" => $req->checkInTime,
            "check_out_date" => $req->checkOutDate,
            "check_out_time" => $req->checkOutTime,
            "name_of_visitor" => $req->nameOfVisitor,
            "contact1" => $req->contact1,
            "contact2" => $req->contact2,
            "email" => $req->email,
            "dob" => $req->dob,
            "gender" => $req->gender,
            "company_name" => $req->companyName,
            "gst_no" => $req->gstNo,
            "department" => $req->department,
            "designation" => $req->designation,
            "website" => $req->website,
            "address" => $req->address,
            "city" => $req->city,
            "postal_code" => $req->postalCode,
            "state" => $req->state,
            "country" => $req->country,
            "visiting_purpose" => $req->visitingPurpose,
            "coming_from" => $req->comingFrom,
            "going_to" => $req->goingTo,
            "no_of_guests" => $req->noOfGuests,
            "room_no" => $req->roomNo,
            "room_type" => $req->roomType,
            "rate" => $req->rate,
            "days" => $req->days,
            "additional_amount" => $req->additionAmt,
            "payment_method" => $req->paymentMethod,
            "advance_paid" => $req->paymentAmt,
            "total_amt" => $req->totalAmount,
        ]);

        return view('billingnew', [
            'data' => $visitor
        ]);
    }

    public function billing($id)
    {
        $visitor = Visitor::find($id);
        return view('billingnew', [
            'data' => $visitor
        ]);
    }
}
