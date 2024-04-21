@extends('../_componets.main')
@section('main')
          <h1>معلومات الزبون</h1>
          <div class="row">
              <div class="col-md-4">
                  <div class="card mb-3">
                      <div class="card-body">
                          <a class="text-decoration-none h2" href="{{route('clients.view',$client->id)}}" class="h3">{{ $client->full_name }}</a>
                          <p class="card-text">{{ $client->phone }}</p>
                      </div>
                  </div>
              </div>
          </div>
      <h1>معلومات المنتوج</h1>
          <table class="table table-striped">
            <thead class="table-dark">
                    <tr>
                    <th>#</th>
                    <th> المنتوج</th>
                    <th>الثمن</th>
                    <th>الباقي</th>
                    <th>تم الدفع</th>
                    <th>العمليات</th>
                   </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_prix }}</td>
                    <td>{{$data['produc_to_pay']}}</td>
                    <td>{{ $result = $data['produc_to_pay']== 0 ? '✅' : '❌' ; }}</td>
                    <td>
                        <form action="{{ route('products.destroy',['id' => $product->id, 'client_id' => $client->id ]) }}" method="POST">
                            <a class="btn btn-secondary" href="{{ route('products.edit',['id' => $product->id, 'client_id' => $client->id ]) }}">تعديل</a>
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger">حذف</button>
                        </form> 
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row justify-content-between mt-3">
            <div class="col-4">
                <h3 class="h1">
                    سجل الدٌفعات
                </h3>
            </div>
            @if (!$data['produc_to_pay'] == 0 )
            <div class="col-2">
                <a href="{{route('payment.store-view',['id' => $product->id, 'client_id' => $client->id,'to_pay' => $data['produc_to_pay']])}}" class="btn btn-dark">إضافة</a>
            </div>
            @endif
        </div>
          <table class="table table-striped">
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
            @foreach ($payments as $payment)
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
                        <form action="{{ route('payment.destroy',['payment_id' => $payment->id ,'client_id' => $client->id]) }}" method="POST">
                            <a class="btn btn-secondary" href="{{ route('payment.edit',['payment_id' => $payment->id, 'product_id' => $product->id ,'client_id' => $client->id ]) }}">تعديل</a>
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
