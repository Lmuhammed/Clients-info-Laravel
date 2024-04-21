@extends('../_componets.main')
@section('main')
            <h3 class="h2">
                إضافة دٌفعة جديدة 
            </h3>
            <div class="row justify-content-between">
                <div class="col-6">
                    <form action="{{route('payment.store',['id' => $product->id,'client_id' => $client->id])}}" method="post">
                      @csrf
                      <div class="card border border-4" style="width: 18rem;">
                        <div class="card-body">
                          <h6 class="card-subtitle mt-3 text-muted">الزبون</h6>
                          <a class="text-decoration-none" href="{{route('clients.view',$client->id)}}">{{$client->full_name}}</a>
                          <h6 class="card-subtitle mb-2 text-muted">المنتوج</h6>
                          <p class="card-text">
                            <a class="text-decoration-none" href="{{route('products.view',['id' => $product->id, 'client_id' => $client->id])}}">{{$product->product_name}}</a>
                          </p>
                          <h6 class="card-subtitle mb-2 text-muted">الثمن</h6>
                          <p class="card-text">
                          {{ $product_price}}
                          </p>
                          <h6 class="card-subtitle mb-2 text-muted">الباقي</h6>
                          <p class="card-text">
                          {{ $to_pay }}
                          </p>
                          </div>
                        </div>
                      </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">المبلغ</label>
                            <input type="text" class="form-control" id="amount" name="amount">
                        </div>
                        <button class="btn btn-success" type="submit">إضافة</button>
                    </form>
                </div>
            </div>
@endsection
