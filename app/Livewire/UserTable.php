<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $data;
    public $selectedUser;
    public $name, $email, $phone, $address;
    public $userId = "10";

    function mount() {
        $this->data = User::all();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->selectedUser = $user;
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->address = $user->address;
    }
    public function render()
    {
        return view('admin.panels.user-table', [
            'data' => $this->data
        ]);
    }
}