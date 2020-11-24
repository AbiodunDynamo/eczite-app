<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class PartOneDashboard extends Component
{
    /**
     * @var User
     */
    public $user;
    public $name , $email, $phone_no, $slug;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $slug)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone_no = $phone;
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.part-one-dashboard');
    }
}
