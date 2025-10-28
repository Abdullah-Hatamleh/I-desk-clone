<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @switch($page)
        @case('dashboard')
            @livewire('ticket-manager')
        @break

        @case('create')
            @livewire('ticket-creation')
        @break

        @default
            <p>page not found</p>
    @endswitch
</div>
