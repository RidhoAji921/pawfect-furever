<div>
    @if ($page == 'dashboard')
        @include('admin.panels.dashboard')
    @elseif ($page == 'users')
        @include('admin.panels.users')
    @elseif ($page == 'orders')
        @include('admin.panels.orders')
    @endif
</div>