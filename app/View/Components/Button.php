<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
 
    public $text;
    public $class;

    public function __construct($textValue, $classValue)
    {
        $this->text=$textValue;
        $this->class=$classValue;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
