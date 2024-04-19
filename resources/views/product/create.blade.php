@extends('../_componets.main')
@section('main')
<main class="">
            <h3 class="h2">
                إضافة منتوج جديد
            </h3>
            <div class="row justify-content-between">
                <div class="col-6">
                    <form action="{{route('products.store',$id)}}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">المنتوج</label>
                            <input type="text" class="form-control" id="product_name" name="product_name">
                        </div>
                        <div class="mb-3">
                            <label for="product_prix" class="form-label">ثمنه</label>
                            <input type="text" class="form-control" id="product_prix" name="product_prix">
                        </div>
                        <button class="btn btn-success" type="submit">إضافة</button>
                    </form>
                </div>
            </div>
        </main>
@endsection
