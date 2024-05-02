@extends('../_partials.main')
@section('title', 'إضافة زبون جديد')
@section('main')
<div class="row mt-4 mb-4">
  <div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3 gold-effect">
                    <div class="pt-3 pb-3 mt-3 mb-3">
                    <h2 class="text-center mt-2 mb-2 pt-3"  >تعديل معلومات الزبون</h2>
                  </div>
                    <form action="{{route('clients.store')}}" method="post">
                      @csrf
                      <x-main.form-field name="full_name" label="الإسم الكامل" type="text"/>
                      <x-main.forminputerror name="full_name"/>

                      <x-main.form-field name="phone" label="رقم الهاتف" type="text"/>
                      <x-main.forminputerror name="phone"/>
                      <div class="d-grid mt-3 mb-3">
                        <button class="btn btn-success" type="submit">إضافة زبون جديد</button>
                      </div>
                    </form>
                </div>
            </div>
@endsection
