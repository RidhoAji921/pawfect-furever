<?php

namespace App\Livewire;

use App\Models\PetHotelReservation;
use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class BusinessReport extends Component
{
    public $ordersData_MBS = [];
    public $ordersData_MLK = [];
    public $ordersData_PetHotel = [];
    public $finishedData_MBS = [];
    public $finishedData_MLK = [];
    public $dates = [];

    function mount() {
        $firstOrderDate = Reservation::min('created_at');
        $lastOrderDate = max(Reservation::max('finished_at'), Reservation::max('created_at'));

        if (!$firstOrderDate || !$lastOrderDate) {
            return;
        }

        $period = Carbon::parse($firstOrderDate)->toPeriod($lastOrderDate, '1 day');
        $this->dates = collect($period)->map(fn($date) => $date->format('Y-m-d'))->toArray();
        $orders = Reservation::selectRaw('DATE(created_at) as date, COUNT(id) as total
            , SUM(CASE WHEN package_id = 1 THEN 1 ELSE 0 END) as package_1_total
            , SUM(CASE WHEN package_id = 2 THEN 1 ELSE 0 END) as package_2_total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
            // ->pluck('package_1_total', 'date');
        $finishedOrders = Reservation::selectRaw('DATE(finished_at) as date
            , SUM(CASE WHEN package_id = 1 THEN 1 ELSE 0 END) as package_1_total
            , SUM(CASE WHEN package_id = 2 THEN 1 ELSE 0 END) as package_2_total')
            ->whereNotNull('finished_at')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
        $ordersHotel = PetHotelReservation::selectRaw('DATE(created_at) as date, COUNT(id) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('total', 'date');
        
        foreach ($this->dates as $date) {
            $this->ordersData_MBS[] = $orders->pluck('package_1_total', 'date')[$date] ?? 0;
            $this->finishedData_MBS[] = $finishedOrders->pluck('package_1_total', 'date')[$date] ?? 0;
            $this->ordersData_MLK[] = $orders->pluck('package_2_total', 'date')[$date] ?? 0;
            $this->finishedData_MLK[] = $finishedOrders->pluck('package_2_total', 'date')[$date] ?? 0;
            $this->ordersData_PetHotel[] = $ordersHotel[$date] ?? 0;
        }
    }

    public function render()
    {
        return view('admin.panels.livewire.business-report');
    }
}
