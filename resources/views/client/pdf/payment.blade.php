@extends('../../_partials.main')
@section('title', "فاتورة : $client->full_name - $Todaydate  ")

@section('main')
  <div class="mt-0 mb-2 h2 text-center">
    <h1>بطاقة الفاتورة ، الزبون {{ $client->full_name}} </h1>
   <div class="d-none d-print-block">
    {{ env('CITY');}} في <span>{{ $Todaydate }}</span>
   </div>
  </div>
    <div class="row">
      <div class="col-lg-8 col-sm-10 col-md-6">
      <x-client.clientinfo :client="$client" /> 
      </div>
    </div>
    {{-- product --}}
    <div class="row">
      <div class="col-lg-8 col-sm-10 col-md-6">
        @php
        $id=0;
      @endphp
          <div class="row justify-content-between">
            @foreach ($products as $product)
            <div class="col-lg-5 col-sm-8 col-md-6">
              @php
              $id++;
              @endphp
              <h2 class="mt-1 mb-1">منتوج رقم {{$id}}</h2>
              <x-product.show-product :product="$product" /> 
              {{-- payments --}}
              @php
                  $i=0;
              @endphp
              <h2 class="mt-1 mb-1">معلومات الدفعات</h2>
              @php
              $all_amount=null;
              @endphp
              @foreach ($product->payments as $payment)
              @php
                  $i++;
              @endphp
              <h2 class="h4">دفعة رقم {{$i}}</h2>
              <x-product.show-payment-pdf :payment="$payment" /> 
              @php
              $all_amount+=$payment->amount;
              $totalAmount = $product->payments->sum('amount');
              $productsPrice=$product->product_prix;
              @endphp
              @php
                    $totalAmount+=$totalAmount;
                    $productsPrice+=$productsPrice;
                @endphp
              @endforeach
            </div>
            @endforeach   
          </div>      
        <table class="table" style="border: 1px solid black;">
          <thead>
              <tr>
                  <th>#</th>
                  <th>المجموع</th>
                  <th>تم دفع</th>
                  <th>الباقي</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>{{$productsPrice}}</td>
                  <td>{{$totalAmount}}</td>
                  <td>{{$productsPrice - $totalAmount}}</td>
              </tr>
          </tbody>
      </table>
      <div class="border: 1px solid black;">
        <h1 class="h3">التوقيع أو الختم</h1>
      </div>
      <div style="width:200px;height: 100px;border: 2px solid black;padding: 10px;">

      </div>
      <div class="d-grid mb-2 mt-2 mx-auto my-auto" style="width: 50%;">
        <button class="btn btn-success btn-lg d-print-none" onclick="print()" id="print">طباعة التقرير</button>
     </div>
      </div>
    </div>
@endsection
