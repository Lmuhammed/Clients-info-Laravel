<?php

namespace App\View\Components\Product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowProduct extends Component
{
    
    public $product;
    public function __construct($product)
    {
        $this->product=$product;;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.show-product');
    }
}
