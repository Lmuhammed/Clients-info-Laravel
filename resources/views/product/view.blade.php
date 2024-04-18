@extends('../_componets.main')
@section('main')
          <h1>معلومات الزبون</h1>
          <div class="row">
              <div class="col-md-4">
                  <div class="card mb-3">
                      <div class="card-body">
                          <a href="{{route('clients.view',$client->id)}}" class="h3">{{ $client->full_name }}</a>
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
        <h1>سجل الدفع</h1>
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>*</th>
                    <th>مبلغ الدفعة</th>
                    <th>تاريخ الدفع</th>
                    <th>تاريخ أخر تعديل</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ '1' }}</td>
                    <td>{{ '22' }}</td>
                    <td>{{ '2023' }}</td>
                    <td>{{ '2024' }}</td>

                </tr>
            </tbody>
        </table>
@endsection
