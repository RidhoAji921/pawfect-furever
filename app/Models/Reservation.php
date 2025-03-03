<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['reservation_identifier', 'user_id', 'package_id', 'status', 'user_note', 'annotation', 'finished_at'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function getEnumValues($column = 'status')
    {
        $type = DB::select("SHOW COLUMNS FROM reservations WHERE Field = ?", [$column])[0]->Type;
        preg_match("/^enum\((.*)\)$/", $type, $matches);
        return explode(",", str_replace("'", "", $matches[1]));
    }
    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($reservation) {
            $package_code = $reservation->package->code;
            $timestamp = time();
            $reservation->reservation_identifier = $package_code . "-" . $timestamp;
        });
    }
}