@extends('../_partials.main')
@section('title', 'معلومات المُورد')
@section('main')
<div class="row mt-3 mb-3">
  {{-- client & product table --}}
<div class="col-lg-8 col-sm-10 col-md-6 bg-white rounded-top mx-auto">
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
{{-- product bar --}}
<x-main.bar name="المنتوجات" class="col-1 py-2 px-2">
{{-- <a href="{{route('products.store-view',$client->id)}}" class="btn btn-success">إضافة</a> --}}
<a href="#" class="btn btn-success">إضافة عنصر جديد</a>
</x-main.bar> 
    <!-- table -->
   {{"Table Item info"}}
</div> 
</div>
@endsection
