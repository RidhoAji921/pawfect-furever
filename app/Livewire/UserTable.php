<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserTable extends Component
{
    public $data;
    public $selectedUser;
    public $name, $email, $phone, $address, $userId;
    public $userPassword;

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

    public function update()
    {
        $user = User::findOrFail($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);
        $this->data = User::all();
        $this->dispatch('togle-edit-modal');
    }

    public function create()
    {
        User::create([
            'email' => $this->email,
            'name' => $this->name,
            'phone' => $this->phone,
            'address' => $this->address,
            'password' => Hash::make($this->userPassword)
        ]);
        $this->data = User::all();
        $this->dispatch('togle-add-modal');
    }
    
    function confirmDelete($id) {
        $this->userId = $id;
    }
    
    function delete() {
        $user = User::findOrFail($this->userId);
        if ($user) {
            $user->delete();
        }
        $this->data = User::all();
        $this->dispatch('togle-delete-modal');
    }

    function resetProperties() {
        $this->reset(['userId', 'name', 'email', 'phone', 'address']);
    }
    public function render()
    {
        return view('admin.panels.user-table', [
            'data' => $this->data
        ]);
    }
}