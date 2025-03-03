<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PetHotelReservation;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /* Menampilkan halaman reservasi-grooming.blade.php dan mengirimkan data paket grooming ke dalamnya. */
    public function show() {
        // Ambil package dengan ID = 1
        $package = Package::find(1);
        
        return view('reservasi-grooming', compact('package'));
    }

    /* Menyimpan reservasi baru ke database.*/
    public function store(Request $request)
    {

        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'note' => 'nullable|string',
        ]);

        // Simpan reservasi ke database
        Reservation::create([
            'user_id' => Auth::user()->id, // Menggunakan ID user yang sedang login
            'package_id' => $request->package_id,
            'status' => 'pending', // Status default
            'user_note' => $request->note, // Menyimpan catatan jika ada
        ]);

        return redirect()->route('detail-reservasi')->with('success', 'Reservasi berhasil dibuat.');
    }

    public function petHotelStore(Request $request){
        $request->validate([
            'nama_pet'=>'required|string|max:255',
            'check_in'=>'required|date',
            'check_out'=>'required|date|after:check_in',
            'days_total'=>'required|integer',
            'price_total'=>'required|integer',
            'note'=>'nullable|string',
        ]);
        PetHotelReservation::create([
            'user_id' => Auth::user()->id,
            'pet_name' => $request->nama_pet,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'total_days' => $request->days_total,
            'total_price' => $request->price_total,
            'user_note' => $request->note,
        ]);

        return redirect()->route('detail-reservasi')->with('success', 'Reservasi berhasil dibuat.');
    }
}
