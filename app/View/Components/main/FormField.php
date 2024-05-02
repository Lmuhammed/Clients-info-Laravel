<?php

namespace App\View\Components\main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormField extends Component
{
    /**
     * Create a new component instance.
     */
    public $namef;
    public $typef;
    public $label;
    public function __construct($name,$type,$label)
    {
        $this->name=$name;
        $this->type=$type;
        $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.form-field');
    }
}
