<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class TicketManager extends Component
{

    public function goTo() {
        //todo
    }
    public function render()
    {
        return view('livewire.ticket-manager', ['tickets' => Ticket::with('category')->get()]);
    }
}
