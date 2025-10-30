<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div wire:loading class="fixed inset-0 z-50 flex items-center justify-center bg-white/50"
        style="z-index: 999;
    width: 100vw;
    height: 100vh;
    backdrop-filter: blur(5px);
    position: fixed;">
        <div class="text-blue-500" role="status" style="position: absolute; top:50%; right:50%;">
            <i class="fa-solid fa-gear  position: absolute; top:50%; right:50%; tw-animate-spin"
                style="scale: 3; color:gray"></i>
        </div>
    </div>
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
