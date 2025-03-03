<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetHotelReservation extends Model
{
    protected $fillable = ['user_id', 'pet_name', 'check_in', 'check_out', 'total_days', 'total_price'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
