@extends('../_partials.main')
@section('title', 'معلومات المُورد')
@section('main')
<div class="row mt-3 mb-3">
  {{-- client & product table --}}
<div class="col-lg-10 col-sm-10 col-md-6 bg-white rounded-top mx-auto">
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
  <form action="{{route('items.create')}}" method="get">
    <input type="hidden" name="AuthPlus" value="{{$supplier->id}}">
    <button type="submit" class="btn btn-success">إضافة عنصر جديد</button>
  </form>
</x-main.bar> 
    <!-- table -->
    <table class="table table-striped mt-2 mb-2 gold-effect">
      <thead class="table-dark">
      <tr>
          <th scope="col">#</th>
          <th scope="col">العنصر</th>
          <th scope="col">ثمن الوحدة</th>
          <th scope="col">عدد الوحدات</th>
          <th scope="col">ثمن الوحدة</th>
          <th scope="col">تاريخ الإضافة</th>
          <th scope="col">تاريخ أخر تعديل</th>
          <th scope="col">العمليات</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=0;
       @endphp 
        @foreach ($supplier->Items as $Items)
        @php
        $i++;
       @endphp 
      <tr>
          <th scope="row">{{$i}}</th>
          <td>{{$Items->name }}</td>
          <td>{{$Items->price_per_item }}</td>
          <td>{{$Items->number }}</td>
          <td>{{$Items->items_price }}</td>
          <td>{{date('Y-m-d', strtotime($Items->created_at))}}</td>
          <td>{{date('Y-m-d', strtotime($Items->updated_at))}}</td>
          <td>
            <div class="d-grid gap-2 d-md-block">
              <form action="{{ route('items.destroy',$Items) }}" method="Post">
                <a class="btn btn-success" href="{{ route('ItemPayment.show',$Items->id) }}">عرض</a>
                <a class="btn btn-secondary" href="{{ route('ItemPayment.edit',$Items) }}">تعديل</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">حذف</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
    
</div> 
</div>
@endsection
