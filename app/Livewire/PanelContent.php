<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;

class PanelContent extends Component
{
    public $page = 'dashboard';

    protected $listeners = ['pageChanged' => 'updatePage'];

    public function updatePage($page)
    {
        $this->page = $page;
    }

    public function render()
    {
        return view('admin.content');
    }
}
