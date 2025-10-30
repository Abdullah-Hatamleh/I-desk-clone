<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;

class MainContent extends Component
{

    public string $page = 'dashboard';




    protected $listeners = ['navigate' => 'changePage'];

    public function changePage(string $page) {


        $this->page = $page;
    }
    public function render()
    {
        return view('livewire.main-content');
    }
}
