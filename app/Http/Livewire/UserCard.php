<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserCard extends Component
{
    public $user;
    public function __construct($id = null)
    {
        if(auth()->check())
        {
            $this->user = auth()->user();
        }
        parent::__construct($id);

    }

    public function render()
    {
        return view('livewire.user-card');
    }
}
