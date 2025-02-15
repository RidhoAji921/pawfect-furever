<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /* Menampilkan halaman reservasi-grooming.blade.php dan mengirimkan data paket grooming ke dalamnya. */
    function show() {
        $packages = Package::all();
        return view('reservasi-grooming', compact('packages'));
    }

    /* Menyimpan reservasi baru ke database.*/
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',    
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'package_id' => 'required|exists:packages,id',
        ]);

        Reservation::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => 'pending',
            'package_id' => $request->package_id,
        ]);

        return redirect()->route('detail-reservasi')->with('success', 'Reservasi berhasil dibuat.');
    }
}
