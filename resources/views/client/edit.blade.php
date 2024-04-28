@extends('../_partials.main')
@section('main')
<main class="">
            <h3 class="h2">
                تعديل معلومات الزبون
            </h3>
            <div class="row justify-content-between border border-4">
                <div class="col-6">
                    <form action="{{route('clients.update',$client->id)}}" method="post">
                      @csrf
                      @method('put')
                        <div class="mb-3">
                            <label for="full_name" class="form-label">الإسم الكامل</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{$client->full_name}}">
                          </div>
                        <div>
                        <div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$client->phone}}">
                        </div>
                        <button class="btn btn-success" type="submit">تعديل</button>
                    </form>
                </div>
            </div>
        </main>
@endsection
