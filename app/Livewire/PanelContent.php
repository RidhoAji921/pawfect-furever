<?php

namespace App\Livewire;

use App\Models\Reservation;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\View;
use Livewire\Attributes\Url;

class PanelContent extends Component
{
    #[Url]
    public $page = 'dashboard';
    public $data = [];

    protected $listeners = ['pageChanged' => 'updatePage'];

    public function updatePage($page)
    {
        $this->page = $page;
    }

    public function loadData()
    {
        switch ($this->page) {
            case 'dashboard':
                $this->data = [
                    'users' => User::all(),
                    'orders' => Reservation::all(),
                ];
                break;
            case 'users':
                $this->data = User::all();
                break;
            default:
            $this->data = [];
                break;
        }
    }

    public function render()
    {
        $this->loadData();
        return view('admin.content', [
            'data' => $this->data
        ]);
    }
}
