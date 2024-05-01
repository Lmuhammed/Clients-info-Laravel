@extends('../../_partials.main')
@section('title', 'طباعة التقارير')
@section('main')
  <h1 class="mt-0 text-center">بطاقة الفاتورة</h1>
    <div class="row">
      <div class="col-lg-5 col-sm-10 col-md-6">
        <x-client.clientinfo :client="$client" /> 
      </div>
    </div>
    {{-- product --}}
    <div class="row">
    @php
      $id=0;
    @endphp
    @foreach ($products as $product)
    @php
    $id++;
    @endphp
    <h2 class="mt-1 mb-1 h1">منتوج رقم {{$id}}</h2>
    <x-product.show-product :product="$product" /> 
    {{-- payments --}}
    @php
        $i=0;
    @endphp
    <h2 class="mt-1 mb-1 h1">معلومات الدفعات</h2>
    @php
    $all_amount=null;
    @endphp
    @foreach ($product->payments as $payment)
    @php
        $i++;
    @endphp
    <h2>دفعة رقم {{$i}}</h2>
    <x-product.show-payment-pdf :payment="$payment" /> 
    @php
    $all_amount+=$payment->amount;
    @endphp
    @endforeach   
      <div class="h1" style="border: 1px solid black;">
        تم دفع <span>{{$all_amount}}</span>
      </div>
    @endforeach
    </div>
    <div class="d-grid mb-2 mt-2 mx-auto my-auto" style="width: 50%;">
      <button class="btn btn-success btn-lg d-print-none" onclick="print()" id="print">طباعة التقرير</button>
   </div>
@endsection
