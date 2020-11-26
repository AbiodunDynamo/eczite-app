<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class LeadBoard extends Component
{
    public $users ;
    public function __construct($id = null)
    {
        $this->users = User::where('referral_count',">=", 0)->orderBy('referral_count','desc')->take(10)->get();
        parent::__construct($id);
    }

    public function render()
    {
        return view('livewire.lead-board');
    }
}
