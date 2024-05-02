@extends('../_partials.main')
@section('title', 'تعديل معلومات الزبون')
@section('main')
<div class="row mt-4 mb-4">
<div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3 gold-effect">
  <div class="pt-3 pb-3 mt-3 mb-3">
    <h2 class="text-center mt-2 mb-2 pt-3"  >تعديل معلومات الزبون</h2>
  </div>
  <form class="" action="{{route('clients.update',$client->id)}}" method="post">
    @csrf

    <x-main.form-field name="full_name" label="الإسم الكامل" type="text">
      {{$client->full_name}}
    </x-main.form-field>
    <x-main.forminputerror name="full_name"/>

    <x-main.form-field name="phone" label="رقم الهاتف" type="text">
      {{$client->phone}}
    </x-main.form-field>
    <x-main.forminputerror name="phone"/>

    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-success">دخول</button>
    </div>
  </form>
</div>      
</div>
@endsection