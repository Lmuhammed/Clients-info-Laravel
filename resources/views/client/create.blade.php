@extends('../_partials.main')
@section('title', 'إضافة زبون جديد')
@section('main')
<main class="">
            <h3 class="h2">
                إضافة زبون جديد
            </h3>
            <div class="row justify-content-between">
                <div class="col-6">
                    <form action="{{route('clients.store')}}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">الإسم الكامل</label>
                            <input type="text" class="form-control" id="full_name" name="full_name">
                          </div>
                        {{-- Component show error --}}
                        <x-main.forminputerror name="full_name"/>
                        <div class="mb-3">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        {{-- Component show error --}}
                        <x-main.forminputerror name="phone"/>
                        <button class="btn btn-success" type="submit">إضافة</button>
                    </form>
                </div>
            </div>
        </main>
@endsection
