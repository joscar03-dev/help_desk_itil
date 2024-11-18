<?php

namespace App\Livewire;

use Livewire\Component;

class TicketSummaryCard extends Component
{
    public $title;
    public $count;
    public $description;

    public function mount($title, $count, $description)
    {
        $this->title = $title;
        $this->count = $count;
        $this->description = $description;
    }

    public function render()
    {
        return view('livewire.ticket-summary-card');
    }
}
