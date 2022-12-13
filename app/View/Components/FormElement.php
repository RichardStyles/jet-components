<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormElement extends Component
{
    public function __construct(public bool $hasWarning = false, public bool $isGood = false)
    {

    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-element');
    }
}