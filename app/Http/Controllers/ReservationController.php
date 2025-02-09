<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    function show() {
        $packages = Package::all();
        return view('reservasi-grooming', compact('packages'));
    }
}
