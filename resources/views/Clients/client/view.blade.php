@extends('../_partials.main')
@section('title', 'معلومات الزبون')
@section('main')
<div class="row mt-3 mb-3">
  {{-- client & product table --}}
<div class="col-lg-8 col-sm-10 col-md-6 bg-white rounded-top mx-auto">
<x-main.bar name="لوحة معلومات الزبون"/>
    {{-- client info  --}}
<x-client.clientinfo :client="$client">
{{-- slot to view print button --}}
<h6 class="card-subtitle  mt-2 text-muted">التقارير - PDF</h6>
{{-- <a class="btn btn-secondary mt-2" href="{{ htmlspecialchars(route('pdf.info',$client->id).'#print') }}">بطاقة معلومات الزبون</a> --}}
<a class="btn btn-success mt-2" href="{{ htmlspecialchars(route('pdf.payment',$client->id).'#print') }}">بطاقة الفاتورة</a>          
</x-client.clientinfo> 
{{-- product bar --}}
<x-main.bar name="المنتوجات" class="col-1 py-2 px-2">
{{-- slot to button to add new product --}}
<a href="{{route('products.store-view',$client->id)}}" class="btn btn-success">إضافة</a>
</x-main.bar> 
    <!-- table -->
      <table class="table table-striped mt-2 mb-2 gold-effect">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">المنتوج</th>
            <th scope="col">ثمنه</th>
            <th scope="col">تم دفع</th>
            <th scope="col">الباقي</th>
            <th scope="col">تاريخ الإضافة</th>
            <th scope="col">تاريخ أخر تعديل</th>
            <th scope="col">العمليات</th>
          </tr>
        </thead>
        <tbody>
          @php
          $i=0;
         @endphp 
          @foreach ($client->products as $products)
          @php
          $i++;
         @endphp 
        <tr>
          @php
          // get amout paid sum
              $amoutSum = $products->payments->sum(function ($payment) {
            return $payment->amount;
            });
          @endphp
            <th scope="row">{{$i}}</th>
            <td>{{$products->product_name }}</td>
            <td>{{$products->product_prix }}</td>
            <td>{{$amoutSum }}</td>
            @if (($products->product_prix - $amoutSum) == 0)
           <td class="bg-success h2">{{$products->product_prix - $amoutSum }}</td>
           @else
           <td class="bg-danger h2">{{$products->product_prix - $amoutSum }}</td>
           @endif
          <td>{{date('Y-m-d', strtotime($products->created_at))}}</td>
            <td>{{date('Y-m-d', strtotime($products->updated_at))}}</td>
            <td>
              <div class="d-grid gap-2 d-md-block">
                <a class="btn btn-success" href="{{ route('products.view',['id' => $products->id, 'client_id' => $client->id ]) }}">عرض</a>
                </div>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  </div> 
</div>
@endsection
