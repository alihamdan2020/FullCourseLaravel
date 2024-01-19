<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Flash extends Component
{
    public $message;
    public function __construct($flashValue)
    {
        $this->message=$flashValue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flash');
    }
}
