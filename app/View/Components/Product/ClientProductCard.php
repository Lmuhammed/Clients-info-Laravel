<?php

namespace App\View\Components\Product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientProductCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $product;
    public $client;
    public $pay;
    public function __construct($product,$client,$pay)
    {
        $this->product=$product;
        $this->client=$client;
        $this->pay=$pay;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.client-product-card');
    }
}
