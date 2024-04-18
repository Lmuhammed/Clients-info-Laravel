@extends('../_componets.main')
@section('main')
<main class="">
            <h3 class="h2">
                تعديل معلومات المنتوج
            </h3>
            <div class="row justify-content-between">
                <div class="col-6">
                    <form action="{{route('products.update',['id' => $products->id, 'client_id' => $client_id ])}}" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="mb-3">
                            <label for="full_name" class="form-label">المنتوج</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" value="{{$products->product_name}}">
                          </div>
                        <div>
                        <div>
                        <div class="mb-3">
                            <label for="product_prix" class="form-label">ثمنه</label>
                            <input type="text" class="form-control" id="product_prix" name="product_prix" value="{{$products->product_prix}}">
                        </div>
                        <button class="btn btn-success" type="submit">تعديل</button>
                    </form>
                </div>
            </div>
        </main>
@endsection
