<x-main.main pagetitle="تعديل معلومات المُورد">
<div class="row mt-4 mb-4">
<div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3 gold-effect">
  <div class="pt-3 pb-3 mt-3 mb-3">
    <h2 class="text-center mt-2 mb-2 pt-3"  >تعديل معلومات المُورد</h2>
  </div>
  <form action="{{route('suppliers.update',$supplier)}}" method="post">
    @csrf
    @method('PUT')
    <x-main.form-field name="name" label="الإسم الكامل" type="text">
      {{$supplier->name}}
    </x-main.form-field>
    <x-main.forminputerror name="name"/>

    <x-main.form-field name="phone" label="رقم الهاتف" type="text">
      {{$supplier->phone}}
    </x-main.form-field>
    <x-main.forminputerror name="phone"/>

     <x-main.form-field name="address" label="العنوان" type="text">
      {{$supplier->address}}
    </x-main.form-field>
    <x-main.forminputerror name="address"/>

    <div class="d-grid mt-3 mb-3">
      <button type="submit" class="btn btn-success">تعديل</button>
    </div>
  </form>
</div>      
</div>
</x-main.main>