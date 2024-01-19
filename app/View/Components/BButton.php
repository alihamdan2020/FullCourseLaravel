<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BButton extends Component
{
public $text;
public $className;
public $classNameB;
    public function __construct($a,$b,$c)
    {
        $this->text=$a;
        $this->className=$b;
        $this->classNameB=$c;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.b-button');
    }
}
