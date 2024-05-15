@extends('../_partials.main')
@section('title', 'معلومات الدٌفعات ')
@section('main')
<div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3">
    <x-main.bar name="لوحة معلومات المُورد"/>
    <div class="card gold-effect mb-4">
      <div class="card-body">
        <h6 class="card-subtitle text-muted">الإسم الكامل</h6>
        <p class="card-text h4  mt-2">{{ $supplier->name}}</p>
        <h6 class="card-subtitle mb-2 text-muted">رقم الهاتف</h6>
        <p class="card-text h4 mt-2">{{ $supplier->phone}}</p>
        <h6 class="card-subtitle mb-2 text-muted">لعنوان</h6>
        <p class="card-text h4 mt-2">{{ $supplier->address}}</p>
      </div>
    </div>
    <x-main.bar name="لوحة المدفوعات"/>
@endsection
