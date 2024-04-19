@extends('../_componets.main')
@section('main')
            <h3 class="h2">
                إضافة منتوج جديد
            </h3>
            <div class="row justify-content-between">
                <div class="col-6">
                    <form action="{{route('payment.store',['id' => $product->id,'client_id' => $client->id])}}" method="post">
                      @csrf
                      <div class="card border border-4" style="width: 18rem;">
                        <div class="card-body">
                          <h6 class="card-subtitle mt-3 text-muted">الزبون</h6>
                          <h5 class="card-title mt-2">{{ $client->full_name}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">المنتوج</h6>
                          <p class="card-text">
                          {{ $product->product_name}}
                          </p>
                          <h6 class="card-subtitle mb-2 text-muted">الثمن</h6>
                          <p class="card-text">
                          {{ $product->prix}}
                          </p>
                          <h6 class="card-subtitle mb-2 text-muted">الباقي</h6>
                          <p class="card-text">
                          {{ '222' }}
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
