@extends('../_partials.main')
@section('main')
<div class="row mt-3 mb-3">
  {{-- client product table --}}
  <div class="col-lg-8 col-sm-10 col-md-6 bg-white rounded-top mx-auto">
    {{-- client info  --}}
    {{-- client  action  --}}
    <x-client.clientbar :client="$client" />
    {{-- end client  action  --}} 
    <x-client.clientinfo :client="$client" /> 
    {{-- end client info  --}}
    {{-- product bar --}}
    <div class="row justify-content-between">
      <div class="col-lg-4 col-sm-6 col-md-6">
              <h3 class="h1">
                المنتوجات
              </h3>
          </div>
          <div class="col-lg-2 col-sm-3 col-md-2">            
            <a href="{{route('products.store-view',$client->id)}}" class="btn btn-success">إضافة</a>
          </div>
      </div>
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
