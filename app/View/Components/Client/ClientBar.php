<?php

namespace App\View\Components\Client;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientBar extends Component
{
    
    /**
     * Create a new component instance.
     */
    public $client;
    public function __construct($client)
    {
        $this->client=$client;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client.client-bar');
    }
}
