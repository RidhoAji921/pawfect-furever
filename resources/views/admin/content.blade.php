<div>
    <div wire:loading class="p-4 sm:ml-64 text-center text-gray-500">
        <p>Loading halaman...</p>
    </div>

    <div wire:loading.remove>
        @if(View::exists("admin.panels.$page"))
            @includeIf("admin.panels.$page")
        @else
            <div class="p-4 sm:ml-64 text-center">
                <p>Halaman "{{ $page }}" tidak ditemukan</p>
            </div>
        @endif
    </div>
</div>