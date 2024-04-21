@extends('../_componets.main')
@section('main')
          <h1>معلومات الزبون</h1>
          <div class="row">
              <div class="col-md-4">
                  <div class="card mb-3">
                      <div class="card-body">
                          <a href="{{route('clients.view',$client->id)}}" class="h3">{{$client->full_name}}</a>
                          <p class="card-text">{{ $client->phone }}</p>
                      </div>
                  </div>
              </div>
          </div>
      <h1>معلومات المنتوج</h1>
          <table class="table table-striped">
            <thead>
                <tr>
                    <th> المنتوج</th>
                    <th>الثمن</th>
                    <th>الباقي</th>
                    <th>تاريخ الطلب</th>
                    <th>تاريخ أخر تعديل</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_prix }}</td>
                    <td>{{ '-' }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            </tbody>
        </table>
        <div class="row justify-content-between mt-3">
            <div class="col-4">
                <h3 class="h1">
                    سجل الدفع
                </h3>
            </div>
            <div class="col-2">
                <a href="{{route('payment.store-view',['id' => $product->id, 'client_id' => $client->id ])}}" class="btn btn-primary">إضافة</a>
            </div>
        </div>
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>*</th>
                    <th>مبلغ الدفعة</th>
                    <th>تاريخ الدفع</th>
                    <th>تاريخ أخر تعديل</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                <tr>
                    <th scope="row">{{$id}}</th>
                    <td>{{$payment->amount }}</td>
                    <td>{{$payment->created_at }}</td>
                    <td>{{$payment->updated_at }}</td>
                    <td>
                      <div class="d-grid gap-2 d-md-block">
                        <form action="{{ route('payment.destroy',['payment_id' => $payment->id,'client_id' => $client->id ]) }}" method="POST">
                            <a class="btn btn-secondary" href="{{ route('payment.edit',['payment_id' => $payment->id, 'client_id' => $client->id ]) }}">تعديل</a>
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
