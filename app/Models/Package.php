<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    // Hubungan One to Many antara model Paket dan model Reservasi.
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}