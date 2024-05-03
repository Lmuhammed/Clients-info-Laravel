<table class="table table-striped ps-2 pe-2">
    <thead class="table-dark">
            <tr>
            <th> المنتوج</th>
            <th>الثمن</th>
            <th>الباقي</th>
            <th>تم الدفع</th>
            <th>العمليات</th>
           </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_prix }}</td>
            <td>{{$topay}}</td>
            <td>{{ $result = $topay == 0 ? '✅' : '❌' ; }}</td>
            <td>
                @can('update', $client)
                <form action="{{ route('products.destroy',['id' => $product->id, 'client_id' => $client->id ]) }}" method="POST">
                    <a class="btn btn-secondary" href="{{ route('products.edit',['id' => $product->id, 'client_id' => $client->id ]) }}">تعديل</a>
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="btn btn-danger">حذف</button>
                </form> 
                @endcan
            </td>
        </tr>
    </tbody>
</table>