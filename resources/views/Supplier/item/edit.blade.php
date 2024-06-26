@extends('../_partials.main')
@section('title', 'إضافة منتوج جديد')
@section('main')
    
@endsection
<x-main.main pagetitle="تعديل معلومات العنصر">
<div class="row mt-4">
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
            <h3 class="h2 text-center mt-3">
                تعديل معلومات عنصر
            </h3>
                    <form action="{{route('items.update',$item)}}" method="post">
                      @csrf
                      @method('PUT')
                        <x-main.form-field name="name" label="العنصر" type="text">
                        {{$item->name}}
                        </x-main.form-field>
                        <x-main.forminputerror name="name"/>

                        <x-main.form-field name="price_per_item" label="الثمن للوحدة" type="text">
                        {{$item->price_per_item}}
                        </x-main.form-field>
                        <x-main.forminputerror name="price_per_item"/>

                        <x-main.form-field name="number" label="عدد الوحدات" type="text">
                        {{$item->number}}
                        </x-main.form-field>
                        <x-main.forminputerror name="number"/>

                        <x-main.form-field name="items_price" label="الثمن الكامل" type="text">
                        {{$item->items_price}}
                      </x-main.form-field>
                        <x-main.forminputerror name="items_price"/>

                        <div class="d-grid mb-4">
                            <button class="btn btn-success" type="submit">تعديل</button>
                        </div>
                    </form>
        </div>
    </div>
</x-main.main>