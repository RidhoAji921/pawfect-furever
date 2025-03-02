<?php

namespace App\Livewire;

use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;

class BusinessReport extends Component
{
    public $ordersData = [];
    public $finishedData = [];
    public $dates = [];

    function mount() {
        $firstOrderDate = Reservation::min('created_at');
        $lastOrderDate = max(Reservation::max('finished_at'), Reservation::max('created_at'));

        if (!$firstOrderDate || !$lastOrderDate) {
            return;
        }

        $period = Carbon::parse($firstOrderDate)->toPeriod($lastOrderDate, '1 day');
        $this->dates = collect($period)->map(fn($date) => $date->format('Y-m-d'))->toArray();
        $orders = Reservation::selectRaw('DATE(created_at) as date, COUNT(id) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('total', 'date');
        $finishedOrders = Reservation::selectRaw('DATE(finished_at) as date, COUNT(id) as total')
            ->whereNotNull('finished_at') // Hanya hitung order yang memiliki finished_at
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('total', 'date');
        foreach ($this->dates as $date) {
            $this->ordersData[] = $orders[$date] ?? 0;
            $this->finishedData[] = $finishedOrders[$date] ?? 0;
        }
    }

    public function render()
    {
        return view('admin.panels.livewire.business-report');
    }
}
