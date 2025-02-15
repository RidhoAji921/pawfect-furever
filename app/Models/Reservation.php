<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'status',
        'package_id',
    ];

    // Mengatur hubungan satu-ke-banyak dengan model Package
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}