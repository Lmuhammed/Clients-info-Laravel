<?php

namespace App\View\Components\Main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class main extends Component
{
    /**
     * Create a new component instance.
     */

   public $pagetitle;

    public function __construct($pagetitle)
    {
        $this->pagetitle = $pagetitle;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.main');
    }
}
