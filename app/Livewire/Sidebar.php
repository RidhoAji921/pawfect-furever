<?php

namespace App\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $selectedPage = 'dashboard';

    public function changePage($page)
    {
        $this->selectedPage = $page;
        $this->dispatch('pageChanged', page: $page);
    }

    public function render()
    {
        return view('admin.sidebar');
    }
}
