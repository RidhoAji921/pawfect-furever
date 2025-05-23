<?php

namespace App\Livewire;

use App\Models\Reservation;
use Livewire\Component;
use Carbon\Carbon;

use function Laravel\Prompts\search;

class OrderTable extends Component
{
    public $data;
    public $statuses = [];
    public $search;

    function mount() {
        $this->data = Reservation::all();
        $this->statuses = Reservation::getEnumValues();
    }

    public function updatedSearch()
    {
        if($this->search == ""){
            $this->data = Reservation::all();
        }
        else{
            if(strtolower($this->search) == "mandi lengkap"){ $this->search = "MLK";}
            else if(strtolower($this->search) == "mandi biasa"){ $this->search = "MBS";}
            $this->data = Reservation::where("reservation_identifier", 'like', '%' . $this->search . '%')->get();
        }
    }

    public function updateStatus($orderId, $newStatus)
    {
        $order = Reservation::find($orderId);
        if ($order) {
            $order->update([
                'status' => $newStatus,
                'finished_at' => $newStatus === 'Finished' ? Carbon::now() : null
            ]);
            $this->updatedSearch();
        }
    }

    public function updateNote($orderId, $newNote)
    {
        $order = Reservation::find($orderId);
        if($order){
            $order->update([
                'annotation' => $newNote,
            ]);
            $this->updatedSearch();
        }
    }

    public function render()
    {
        return view('admin.panels.livewire.order-table');
    }
}
