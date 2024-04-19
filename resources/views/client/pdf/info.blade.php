@extends('../../_componets.main')
@section('main')
@section('styles')
//
@media print {
  .visible-print {
      display: block !important;
  }
}

@media screen {
  .visible-print {
      display: none !important;
  }
}
//card style
.card {
  width: 300px;
  border: 3px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  margin: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

@endsection
      <h1 class="mt-4 mb-4">بطاقة معلومات الزبون</h1>
      <div class="card">
        <h3> {{ "الإسم الكامل"}}</h3>
        <h2>{{$client->full_name }}</h2>
        <h3> {{ "رقم الهاتف"}}</h3>
        <p>{{ $client->phone}}</p>
        <h3> {{ "تاريخ الإضافة"}}</h3>
        <p class="card-text">{{ date('Y-m-d', strtotime($client->created_at)) }}</p>
        <h3> {{ "تاريخ أخر تعديل"}}</h3>
        <p class="card-text">{{ date('Y-m-d', strtotime($client->updated_at))}}</p>
      </div>     
      <h3 class="visible-print">
      تاريخ إصدار التقرير  
      {{date("Y-m-d")}}
      </h3>      
      <div class="h1 mt-3 mb-3">
        <button class="btn btn-dark btn-lg d-print-none" onclick="print()">طباعة التقرير</button>
      </div>
@endsection
