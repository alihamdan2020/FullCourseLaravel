<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageTitle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $title;
     public $className;
    //  $title same title exist in your page title component
    public function __construct($value,$classValue)
    {
        $this->title=$value;
        $this->className=$classValue;
        // line above mean, $title the value of parameter $value
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-title');
    }
}
