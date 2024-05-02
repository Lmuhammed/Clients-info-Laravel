@extends('../_partials.main')
@section('title', 'صفحة الدخول')
@section('main')
<div class="row mt-4 mb-4">
<div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3">
  <div class="pt-3 pb-3 mt-3 mb-3">
    <h2 class="text-center mt-2 mb-2 pt-3"  >لوحة تسجيل الدخول</h2>
  </div>
  <form action="{{route('login.custom')}}" method="post">
    @csrf
    <x-main.form-field name="username" label="إسم المستخدم" type="text">
    </x-main.form-field>
    <x-main.forminputerror name="username"/>

    <x-main.form-field name="password" label="كلمة السر" type="password"/>
    <x-main.forminputerror name="password"/>

    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-success">دخول</button>
    </div>
  </form>
  <p>ليس لديك حساب ؟ <a href="{{route('register')}}">أنشىء حساب</a></p>
</div>      
</div>
@endsection