@extends('../_partials.main')
@section('main')
    <div class="row mt-4">
       
        <div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3">
            <h3 class="h2 text-center mt-3">
                معلومات الزبون
            </h3>
            <div class="card gold-effect mb-4">
                <div class="card-body">
                  <h6 class="card-subtitle text-muted">الإسم الكامل</h6>
                  <a href="{{route('clients.view',$client->id)}}" class="h3">{{$client->full_name}}</a>
                  <h6 class="card-subtitle mb-2 text-muted">رقم الهاتف</h6>
                  <p class="card-text h4 mt-2">{{ $client->phone}}</p>
                </div>
            </div>
            <h3 class="h2 text-center mt-3">
                إضافة منتوج جديد
            </h3>
                    <form action="{{route('products.store',$id)}}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">المنتوج</label>
                            <input type="text" class="form-control" id="product_name" name="product_name">
                        </div>
                        {{-- Component show error --}}
                        <x-main.forminputerror name="product_name"/>
                        <div class="mb-3">
                            <label for="product_prix" class="form-label">ثمنه</label>
                            <input type="text" class="form-control" id="product_prix" name="product_prix">
                        </div>
                        {{-- Component show error --}}
                        <x-main.forminputerror name="product_prix"/>
                        <div class="d-grid mb-4">
                            <button class="btn btn-success" type="submit">إضافة</button>
                        </div>
                    </form>
        </div>
    </div>
@endsection
