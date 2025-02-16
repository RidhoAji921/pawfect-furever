<div>
    <div wire:loading class="p-4 sm:ml-64 text-center text-gray-500">
        <p>Loading halaman...</p>
    </div>

    <div wire:loading.remove>
        @includeIf("admin.panels.$page")
    </div>
</div>