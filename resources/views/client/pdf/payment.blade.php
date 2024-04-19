@extends('../../_componets.main')
@section('main')
<h1 class="mt-4 mb-4">بطاقة فاتورة الزبون {{$client->full_name}}</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            {{-- @dd($client) --}}
            <h4 class="card-title">{{$client->full_name }}</h4>
            <p class="card-text">{{ "رقم الهاتف"}}</p>
            <p class="card-text">{{ $client->phone}}</p>
            <p class="card-text">{{ "تاريخ الإضافة"}}</p>
            <p class="card-text">{{ date('Y-m-d', strtotime($client->created_at)) }}</p>
            <p class="card-text">{{ "تاريخ أخر تعديل"}}</p>
            <p class="card-text">{{ date('Y-m-d', strtotime($client->updated_at))}}</p>
          </div>
        </div>
      </div>
    </div>
    {{-- product --}}
    <div class="row">
      @foreach ($products as $product)
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <p class="card-text">{{ "المنتوج"}}</p>
            <h4 class="card-title">{{$product->product_name }}</h4>
            <p class="card-text">{{ "ثمنه" }}</p>
            <p class="card-text">{{ "$product->product_prix"}}</p>
            <p class="card-text">{{ "تاريخ الإضافة"}}</p>
            <p class="card-text">{{ date('Y-m-d', strtotime($product->created_at)) }}</p>
            <p class="card-text">{{ "تاريخ أخر تعديل"}}</p>
            <p class="card-text">{{ date('Y-m-d', strtotime($product->updated_at))}}</p>
          </div>
        </div>
      </div>
    {{-- payments --}}
    @foreach ($product->payments as $payment)
    <div class="card">
        <div class="card-body">
          <p class="card-text">{{ "مبلغ الدفعة"}}</p>
          <h4 class="card-title">{{$payment->amount }}</h4>
          <p class="card-text">{{ "تاريخ الإضافة"}}</p>
          <p class="card-text">{{ date('Y-m-d', strtotime($payment->created_at)) }}</p>
          <p class="card-text">{{ "تاريخ أخر تعديل"}}</p>
          <p class="card-text">{{ date('Y-m-d', strtotime($payment->updated_at))}}</p>
        </div>
    </div>   
    @endforeach   
      @endforeach
    </div>
    <div class="h1 mt-3 mb-3">
      <button class="btn btn-dark btn-lg d-print-none" onclick="print()">طباعة التقرير</button>
    </div>
@endsection
