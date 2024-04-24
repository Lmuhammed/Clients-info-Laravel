@extends('../../_componets.main')
@section('main')
<h1 class="mt-4 mb-4 text-center">بطاقة فاتورة</h1>
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th>{{ "الإسم الكامل"}}</th>
            <th>{{ "رقم الهاتف"}}</th>
            <th>{{ "تاريخ الإضافة"}}</th>
            <th>{{ "تاريخ أخر تعديل"}}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$client->full_name }}</td>
            <td>{{ $client->phone}}</td>
            <td> {{ date('Y-m-d', strtotime($client->created_at)) }}</td>
            <td> {{ date('Y-m-d', strtotime($client->created_at)) }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr>
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
    <table class="table">
      <thead>
        <tr>
          <th>*</th>
          <th>{{ "مبلغ الدفعة"}}</th>
          <th>{{ "تاريخ الإضافة"}}</th>
          <th>{{ "تاريخ أخر تعديل"}}</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{$payment->amount }}</td>
          <td>{{ $client->phone}}</td>
          <td> {{ date('Y-m-d', strtotime($payment->created_at))}}</td>
          <td> {{ date('Y-m-d', strtotime($payment->updated_at))}}</td>
        </tr>
      </tbody>
    </table>
    @endforeach   
      @endforeach
    </div>
    <div class="d-grid mb-3">
      <button class="btn btn-dark btn-lg d-print-none" onclick="print()" id="print">طباعة التقرير</button>
   </div>
@endsection
