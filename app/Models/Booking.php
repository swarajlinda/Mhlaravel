<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Accessor for check_in
    public function getCheckInAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    // Accessor for check_out
    public function getCheckOutAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    // Accessor for created_at
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    // 
    public static function getAllBookings()
    {
        return self::orderByDesc('id')
            ->paginate(10);
    }
}
