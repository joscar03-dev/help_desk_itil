<?php

namespace App\Livewire;

use Livewire\Component;

class RecentTickets extends Component
{
    public function render()
    {
        // In a real application, you would fetch this data from your database
        $tickets = [
            ['id' => 1, 'title' => 'Login issues', 'status' => 'Open', 'priority' => 'High', 'created_at' => '2023-06-01'],
            ['id' => 2, 'title' => 'Feature request', 'status' => 'In Progress', 'priority' => 'Medium', 'created_at' => '2023-05-28'],
            ['id' => 3, 'title' => 'Billing question', 'status' => 'Resolved', 'priority' => 'Low', 'created_at' => '2023-05-25'],
        ];

        return view('livewire.recent-tickets', ['tickets' => $tickets]);
    }
}
