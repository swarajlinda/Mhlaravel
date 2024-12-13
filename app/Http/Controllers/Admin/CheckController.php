<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    //
    public function checkIn()
    {
        return view('admin.check.checkin');
    }
}
