<?php

namespace App\Livewire;

use App\Livewire\Validators\TicketCreationRules;
use App\Models\Category;
use App\Models\Ticket;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;


class TicketCreation extends Component
{
    use WithFileUploads;

    //categories for fetching and updating purposes
    public $firstCategory = null;
    public $secondCategory = null;
    public $secondCats = [];
    public $thirdCats = [];

    //Form priorities to submit and create a ticket
    public $thirdCategory = null;
    public $priority = '';
    public $country = '';
    public $customerName = '';
    public $customerNumber = '';
    public $customerEmail = '';
    public $site = '';
    public $phone = '';
    public $customerId = '';
    public $anydeskId = '';
    public $issues = [];
    public $attachment;
    public $comment = '';

    public function firstCategoryChanged($newVal) {
        if($newVal) {
            $this->secondCategory = null;
            $this->firstCategory = Category::where('id',$newVal)->first();
            $this->secondCats = $this->firstCategory->children;
            $this->thirdCats = [];
        }
        else {
            $this->secondCats = [];
            $this->thirdCats = [];
        }
    }

    public function secondCategoryChanged($newVal) {
        if($newVal)
        {
            $this->thirdCategory = null;
            $secondCategory = Category::where('id',$newVal)->first();
            $this->thirdCats = $secondCategory->children;
        } else {
            $this->thirdCats = [];
        }

    }

    public function testForm() {
        //  $this->dispatch('log-message', message: 'issues are' . $this->issues);
        dd([
            $this
        ]);
    }

    public function createTicket() {

        $validated = $this->validate(
            TicketCreationRules::rules(),
            TicketCreationRules::messages()
        );
        $filepath = null;
        if($this->attachment) {
            $filepath = $this->attachment->store('files','public');
        }
        try {
            Ticket::create([
            'priority'         => $validated['priority'],
            'country'          => $validated['country'] ?? null,
            'comment'          => $validated['comment'] ?? null,
            'state'            => 'open',
            'category_id'      => $validated['thirdCategory'], // from your categories table
            'customer_name'    => $validated['customerName'] ?? null,
            'customer_number'  => $validated['customerNumber'] ?? null,
            'customer_email'   => $validated['customerEmail'] ?? null,
            'site'             => $validated['site'],
            'phone'            => $validated['phone'],
            'customer_id'      => $validated['customerId'],
            'anydesk_id'       => $validated['anydeskId'],
            'issues'           => $validated['issues'],
            'attachment'       => $filepath,
        ]);
            $this->reset();
        session()->flash('success', 'Ticket created successfully!');
        $this->js("alert('Post saved!')");
        } catch (\Exception $error) {
            dd($error);
        }
    }

    public function render()
    {
        return view('livewire.ticket-creation', ['firstcats' => Category::where('parent_id', null)->get()]);
    }
}
