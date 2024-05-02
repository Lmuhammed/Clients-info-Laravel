<table class="table table-striped gold-effect" style="width: 50%;" >
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
                    <a class="btn btn-secondary" href="{{ route('payment.edit',['payment_id' => $payment->id, 'product_id' => $product->id ,'client_id' => $client->id ,'to_pay' => $topay]) }}">تعديل</a>
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