@extends('../_partials.main')
@section('title', 'تعديل معلومات الزبون')
@section('main')
      <div class="row mt-4">
        <div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3">
            <div class="pt-3 pb-3 mt-3 mb-3">
                <h2 class="text-center mt-2 mb-2 pt-3 gold-effect"  >تعديل معلومات الزبون</h2>
              </div>
                      <form class="gold-effect mt-4 mb-4" action="{{route('clients.update',$client->id)}}" method="post">
                      @csrf
                      @method('put')
                        <div class="mb-3">
                            <label for="full_name" class="form-label">الإسم الكامل</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{$client->full_name}}">
                          </div>
                          {{-- Component show error --}}
                          <x-main.forminputerror name="full_name"/>
                        <div class="mb-3">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$client->phone}}">
                        </div>
                        {{-- Component show error --}}
                        <x-main.forminputerror name="phone"/>
                        <div class="d-grid mb-3 mt-3">
                            <button class="btn btn-success" type="submit">تعديل</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
