<?php

namespace App\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class TicketManager extends Component
{

    public function goTo($id) {
        //todo
        $ticket = Ticket::find($id);

        if($ticket && $ticket->attachment) {
            dd(Storage::url($ticket->attachment));
        }
    }

    public function refreshTickets()
    {
        $this->emitSelf('refresh'); // Optional if you want to handle listeners
        // No need to fetch tickets manually; render() does that
    }

    public function render()
    {
        return view('livewire.ticket-manager', ['tickets' => Ticket::with('category')->orderBy('created_at', 'desc')->get()]);
    }
}
