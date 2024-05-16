@extends('../_partials.main')
@section('title', 'معلومات الدٌفعات ')
@section('main')
<div class="col-lg-8 col-sm-10 col-md-6 bg-white m-auto rounded-top">
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
    <x-main.bar name="لوحة المدفوعات">
      <form action="{{route('ItemPayment.create')}}" method="get">
        <input type="hidden" name="AuthPlus" value="{{$item->id}}">
        <button type="submit" class="btn btn-success">إضافة</button>
      </form>
    </x-main.bar>
    <table class="table table-striped gold-effect text-center" >
      <thead class="table-dark">
          <tr>
              <th>#</th>
              <th>مبلغ الدفعة</th>
              <th>تاريخ الدفع</th>
              <th>تاريخ أخر تعديل</th>
              <th>العمليات</th>
          </tr>
      </thead>
  <tbody>
      @php
      $i=0;
     @endphp 
      @foreach ($itemPayment as $payment)
      @php
      $i++;
     @endphp 
          <tr>
              <th scope="row">{{$i}}</th>
              <td>{{ $payment->amount }}</td>
              <td>{{ date('Y-m-d', strtotime($payment->created_at)) }}</td>
              <td>{{ date('Y-m-d', strtotime($payment->updated_at)) }}</td>
              <td>
                  <div class="d-grid gap-2 d-md-block">
                  <form action="{{ route('ItemPayment.destroy',$payment->id) }}" method="POST">
                    <a class="btn btn-secondary" href="{{ route('ItemPayment.edit',$payment->id) }}">تعديل</a>
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
@endsection
