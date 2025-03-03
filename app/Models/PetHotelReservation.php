<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PetHotelReservation extends Model
{
    // protected $fillable = ['reservation_identifier', 'user_id', 'status', 'pet_name', 'check_in', 'check_out', 'total_days', 'total_price'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function getEnumValues($column = 'status')
    {
        $type = DB::select("SHOW COLUMNS FROM pet_hotel_reservations WHERE Field = ?", [$column])[0]->Type;
        preg_match("/^enum\((.*)\)$/", $type, $matches);
        return explode(",", str_replace("'", "", $matches[1]));
    }
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($reservation) {
            $timestamp = time();
            $reservation->reservation_identifier = "HTL-" . $timestamp;
        });
    }
}
