<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dropdown extends Component
{
    public $inputLabel;
    public $inputValue;
    public $inputRequired;
    public $inputName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputLabel, $inputValue, $inputRequired, $inputName)
    {
        $this->inputLabel = $inputLabel;
        $this->inputName = $inputName;
        $this->inputValue = !empty($inputValue) ? $inputValue : old($inputValue);
        $this->inputRequired = $inputRequired === 'true' ? true : false;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dropdown');
    }
}
