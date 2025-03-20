<?php

namespace App\Livewire;

use App\Models\PetHotelReservation;
use Livewire\Component;
use Carbon\Carbon;

class PetHotelOrderTable extends Component
{
    public $data;
    public $statuses = [];
    public $search;

    function mount() {
        $this->data = PetHotelReservation::all();
        $this->statuses = PetHotelReservation::getEnumValues();
    }

    public function updatedSearch()
    {
        if($this->search == ""){
            $this->data = PetHotelReservation::all();
        }
        else{
            $this->data = PetHotelReservation::where("reservation_identifier", 'like', '%' . $this->search . '%')->get();
        }
    }

    public function updateStatus($orderId, $newStatus)
    {
        $order = PetHotelReservation::find($orderId);
        if ($order) {
            $order->update([
                'status' => $newStatus,
                // 'finished_at' => $newStatus === 'Finished' ? Carbon::now() : null
            ]);
            $this->updatedSearch();
        }
    }

    public function updateNote($orderId, $newNote)
    {
        $order = PetHotelReservation::find($orderId);
        if($order){
            $order->update([
                'annotation' => $newNote,
            ]);
            $this->updatedSearch();
        }
    }

    public function render()
    {
        return view('admin.panels.livewire.pet-hotel-order-table');
    }
}
