<?php

namespace App\View\Components\Product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $product;
    public $topay;
    public $client;
    public function __construct($product,$topay,$client)
    {
        $this->product=$product;
        $this->topay=$topay;
        $this->client=$client;


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.product-table');
    }
}
