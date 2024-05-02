<?php

namespace App\View\Components\Payment;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PaymentTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $payments;
    public $client;
    public $product;
    public $topay;
    public function __construct($payments,$client,$product,$topay)
    {
        $this->payments=$payments;
        $this->product=$product;
        $this->client=$client;
        $this->topay=$topay;


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.payment.payment-table');
    }
}
