<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function show() {
        // $reservations = Reservation::with('package')->get();
        $reservations = Reservation::where('user_id', Auth::user()->id)->get();
        
        return view('profile', compact('reservations'));
    }
    
    public function cancelOrder(Request $request, $id)
    {
        // Cari reservasi berdasarkan ID
        $reservation = Reservation::find($id);

        // Validasi apakah reservasi ditemukan
        if (!$reservation) {
            return redirect()->back()->with('error', 'Reservasi tidak ditemukan.');
        }

        // Pastikan reservasi milik pengguna yang login
        if ($reservation->user_id != Auth::id()) {
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk membatalkan reservasi ini.');
        }

        // Validasi status reservasi
        if ($reservation->status == 'Finished' || $reservation->status == 'Canceled') {
            return redirect()->back()->with('error', 'Reservasi tidak dapat dibatalkan karena statusnya sudah ' . $reservation->status . '.');
        }

        // Update status reservasi menjadi "Canceled"
        $reservation->status = 'Canceled';
        $reservation->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Reservasi berhasil dibatalkan.');
    }
}
