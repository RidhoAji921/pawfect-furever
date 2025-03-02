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
    public $isOperator = false;
    
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users|max:255'
    ];

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
        $this->validate();
        $user = User::findOrFail($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);
        $this->data = User::all();
        $this->dispatch('togle-edit-modal');
        session()->flash('message', 'Data pengguna berhasil diubah!');
    }

    public function create()
    {
        $this->validate();
        User::create([
            'email' => $this->pull('email'),
            'name' => $this->pull('name'),
            'phone' => $this->pull('phone'),
            'address' => $this->pull('address'),
            'password' => Hash::make($this->pull("userPassword")),
            'is_admin' => $this->pull('isOperator')
        ]);
        $this->data = User::all();
        $this->dispatch('togle-add-modal');

        session()->flash('message', 'Pengguna berhasil ditambahkan!');
    }
    
    function confirmDelete($id) {
        $this->userId = $id;
    }
    
    function delete() {
        $user = User::findOrFail($this->userId);
        $username = $user->name;
        if ($user) {
            $user->delete();
        }
        $this->data = User::all();
        $this->dispatch('togle-delete-modal');
        session()->flash('message', "Pengguna dengan id: {$this->userId} nama:{$username} berhasil dihapus!");
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