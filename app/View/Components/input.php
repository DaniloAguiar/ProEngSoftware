<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $inputLabel;
    public $inputValue;
    public $inputRequired;
    public $inputType;
    public $inputName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputLabel, $inputValue, $inputRequired, $inputType, $inputName)
    {
        $this->inputLabel = $inputLabel;
        $this->inputValue = !empty($inputValue) ? $inputValue : old($inputName);
        $this->inputRequired = $inputRequired === 'true' ? true : false;
        $this->inputType = $inputType;
        $this->inputName = $inputName;

        if (strtolower($inputType) == 'date' && $this->inputValue != "")
            $this->inputValue = date('Y-m-d', strtotime($this->inputValue));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
