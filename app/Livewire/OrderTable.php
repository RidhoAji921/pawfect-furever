<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Component;
use Carbon\Carbon;

class OrderTable extends Component
{
    public $data;
    public $statuses = [];

    function mount() {
        $this->data = Reservation::all();
        $this->statuses = Reservation::getEnumValues();
    }

    public function updateStatus($orderId, $newStatus)
    {
        $order = Reservation::find($orderId);
        if ($order) {
            $order->update([
                'status' => $newStatus,
                'finished_at' => $newStatus === 'Finished' ? Carbon::now() : null
            ]);
            $this->data = Reservation::all(); // Refresh data setelah update
        }
    }

    public function render()
    {
        return view('admin.panels.order-table');
    }
}
