<?php

namespace App\View\Components\Product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowPaymentPdf extends Component
{
    /**
     * Create a new component instance.
     */
    public $payment;
    public function __construct($payment)
    {
        $this->payment=$payment;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.show-payment-pdf');
    }
}
