<?php

namespace App\Livewire;

use Livewire\Component;

class HelpDeskDashboard extends Component
{
    public $sidebarOpen = false;

    public function toggleSidebar()
    {
        $this->sidebarOpen = !$this->sidebarOpen;
    }
    public function render()
    {
        return view('livewire.help-desk-dashboard');
    }
}
