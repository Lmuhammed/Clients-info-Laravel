@extends('../../_partials.main')
@section('title', 'طباعة التقارير')
@section('main')
  <h1 class="mt-4 mb-4 text-center">بطاقة الفاتورة</h1>
    <div class="row">
      <div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top">
        <x-client.clientinfo :client="$client" /> 
      </div>
    </div>
    <hr>
    {{-- product --}}
    <h2 class="mt-4 mb-4 text-center h1">معلومات المنتوج</h2>
    <div class="row">
    @foreach ($products as $product)
    <x-product.show-product :product="$product" /> 
    {{-- payments --}}
    @php
        $i=0;
    @endphp
    <h2 class="mt-4 mb-4 text-center h1">معلومات الدفعات</h2>
    @foreach ($product->payments as $payment)
    <table class="table">
      @php
      $i++;
      @endphp
    <thead class="table-dark">
          <tr>
          <th>*</th>
          <th>{{ "مبلغ الدفعة"}}</th>
          <th>{{ "تاريخ الإضافة"}}</th>
          <th>{{ "تاريخ أخر تعديل"}}</th>
        </tr>
    </thead>
      <tbody>
        <tr>
          <th>{{$i}}</th>
          <td>{{$payment->amount }}</td>
          <td> {{ date('Y-m-d', strtotime($payment->created_at))}}</td>
          <td> {{ date('Y-m-d', strtotime($payment->updated_at))}}</td>
        </tr>
      </tbody>
    </table>
    @endforeach   
    @endforeach
    </div>
    <div class="d-grid mb-3 mt-3 mx-auto my-auto" style="width: 50%;">
      <button class="btn btn-success btn-lg d-print-none" onclick="print()" id="print">طباعة التقرير</button>
   </div>
@endsection
