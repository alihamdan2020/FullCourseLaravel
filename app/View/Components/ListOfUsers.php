<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListOfUsers extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $users;
    // $users is the name of the array (parameter) used in component list-of-user.blade.php
    public function __construct($singleUser)
    {
        $this->users=$singleUser;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.list-of-users');
    }
}
