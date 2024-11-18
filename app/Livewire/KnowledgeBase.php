<?php

namespace App\Livewire;

use Livewire\Component;

class KnowledgeBase extends Component
{
    public function render()
    {
        // In a real application, you would fetch this data from your database
        $articles = [
            ['id' => 1, 'title' => 'How to reset your password', 'views' => 1234],
            ['id' => 2, 'title' => 'Troubleshooting common login issues', 'views' => 987],
            ['id' => 3, 'title' => 'Setting up two-factor authentication', 'views' => 756],
        ];

        return view('livewire.knowledge-base', ['articles' => $articles]);
    }
}
