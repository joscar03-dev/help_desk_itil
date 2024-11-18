<?php

namespace App\Livewire;

use Livewire\Component;

class UserProfileDropdown extends Component
{
    public $showDropdown = false;

    public function toggleDropdown()
    {
        $this->showDropdown = !$this->showDropdown;
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.user-profile-dropdown');
    }
}
