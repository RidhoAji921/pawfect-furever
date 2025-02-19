<div x-data="user">
    @if (session('message'))   
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div class="ms-3 text-sm font-medium">
        {{ session('message') }}
      </div>
      <button x-on:click="removeAlert" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
      </button>
    </div>
    @endif
    <button type="button" wire:click="resetProperties" x-on:click="modalAddToggle" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Tambah user</button>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nomor Telepon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user) 
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4">
                        {{ $user->id }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                        @if ($user->is_admin)
                        <span class="font-light text-xs text-yellow-300">admin</span>
                        @endif
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->phone??'-' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->address??'-' }}
                    </td>
                    <td class="px-6 py-4 flex justify-around min-w-36">
                        <a wire:click="edit({{ $user->id }})" x-on:click="modalEditToggle" href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <a wire:click="confirmDelete({{ $user->id }})" x-on:click="modalDeleteToggle" href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Main modal -->
    <div id="edit-user-modal" wire:ignore.self tabindex="-1" class="hidden bg-slate-800 bg-opacity-50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    {{-- <div wire:loading wire:target="resetProperties">
                        Loading...
                    </div> --}}
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Ganti data pengguna
                        </h3>
                        <p class="text-sm font-semibold text-gray-900 dark:text-white">id:<span x-text="$wire.userId"></span></p>
                    </div>
                    <button wire:click="resetProperties" x-on:click="modalEditToggle" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" wire:submit.prevent="update">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengguna</label>
                            <input type="text" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan nama pengguna" required />
                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan email pengguna" required />
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                            <input type="text" wire:model="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan nomor telepon pengguna"/>
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text" wire:model="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan alamat pengguna"/>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah Data Pengguna</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="add-user-modal" wire:ignore.self tabindex="-1" class="hidden bg-slate-800 bg-opacity-50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    {{-- <div wire:loading wire:target="resetProperties">
                        Loading...
                    </div> --}}
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Tambahkan pengguna baru
                    </h3>
                    <button x-on:click="modalAddToggle" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" wire:submit.prevent="create">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengguna</label>
                            <input type="text" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan nama pengguna" required />
                            @error('name') <span class="text-red-500 text-sm">adfas{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan email pengguna" required />
                            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                            <input type="text" wire:model="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan nomor telepon pengguna"/>
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <input type="text" wire:model="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan alamat pengguna"/>
                        </div>
                        <div>
                            <label for="userPassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata sandi</label>
                            <input type="text" wire:model="userPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan kata sandi pengguna"/>
                        </div>
                        <div class="flex items-center gap-2">
                            <label for="operator" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User ini adalah operator</label>
                            <input type="checkbox" wire:model="isOperator" class="form-checkbox">
                        </div>
                        <button class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambahkan Pengguna</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div id="delete-modal" wire:ignore tabindex="-1" class="hidden bg-slate-800 bg-opacity-50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <button x-on:click="modalDeleteToggle" type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Hapus user dengan ID: <span x-text="$wire.userId"></span>?</h3>
                    <button wire:click="delete({{ $user->id }})" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Ya, hapus user ini
                    </button>
                    <button x-on:click="modalDeleteToggle" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batalkan</button>
                </div>
            </div>
        </div>
    </div>    
</div>

@script
<script>
    $wire.on('togle-edit-modal', () => {
        console.log('Togle');
        document.getElementById("edit-user-modal").classList.toggle("flex");
        document.getElementById("edit-user-modal").classList.toggle("hidden");
    });
    $wire.on('togle-add-modal', () => {
        console.log('Togle');
        document.getElementById("add-user-modal").classList.toggle("flex");
        document.getElementById("add-user-modal").classList.toggle("hidden");
    });
    $wire.on('togle-delete-modal', () => {
        console.log('Togle');
        document.getElementById("delete-modal").classList.toggle("flex");
        document.getElementById("delete-modal").classList.toggle("hidden");
    });
    Alpine.data('user', () => {
        return {
            modalEditToggle() {
                document.getElementById("edit-user-modal").classList.toggle("flex");
                document.getElementById("edit-user-modal").classList.toggle("hidden");
            },
            modalAddToggle() {
                document.getElementById("add-user-modal").classList.toggle("flex");
                document.getElementById("add-user-modal").classList.toggle("hidden");
            },
            modalDeleteToggle() {
                document.getElementById("delete-modal").classList.toggle("flex");
                document.getElementById("delete-modal").classList.toggle("hidden");
            },
            removeAlert() {
                document.getElementById("alert-3").classList.remove("flex");
                document.getElementById("alert-3").classList.add("hidden");
            },
        }
    })
    const modal1 = document.getElementById('edit-user-modal');
    const modal2 = document.getElementById('add-user-modal');
    const modal3 = document.getElementById('delete-modal');
    modal1.addEventListener('click', (e) => {
        if (e.target === modal1) {
            modal1.classList.toggle('hidden');
            modal1.classList.toggle('flex');
        }
    });
    modal2.addEventListener('click', (e) => {
        if (e.target === modal2) {
            modal2.classList.toggle('hidden');
            modal2.classList.toggle('flex');
        }
    });
    modal3.addEventListener('click', (e) => {
        if (e.target === modal3) {
            modal3.classList.toggle('hidden');
            modal3.classList.toggle('flex');
        }
    });
</script>
@endscript