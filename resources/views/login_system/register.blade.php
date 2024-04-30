@extends('../_partials.main')
@section('title', 'إنشاء حساب جديد')
@section('main')
<div class="row mt-4">
  <div class="col-lg-5 col-sm-10 col-md-6 m-auto rounded-top bg-white border border-3">
    <div class="pt-3 pb-3 mt-3 mb-3">
      <h2 class="text-center mt-2 mb-2 pt-3"  >إنشىء حساب جديد</h2>
    </div>
      <form action="{{route('register.custom')}}" method="post">
        @csrf
      <div class="input-group mb-3">
      <label for="full_name" class="input-group-text">الإسم الكامل</label>
      <input type="text" name="full_name" id="full_name" class="form-control">
      </div>
      {{-- Component show error --}}
      <x-main.forminputerror name="full_name"/>
      <div class="input-group mb-3">
      <label for="username" class="input-group-text">إسم المستخدم</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="مثال : ahmmed3, anas98 ....">
      </div>
      {{-- Component show error --}}
      <x-main.forminputerror name="username"/>
     <div class="input-group mb-3">
      <label for="password" class="input-group-text">كلمة السر</label>
      <input type="password" name="password" id="password" class="form-control">
      <p class="text-success mt-2 mb-2"> تذكر ! يجب أن تكون كلمة السر سهلة التذكر وقوية في نفس الوقت</p>
     </div>
    {{-- Component show error --}}
    <x-main.forminputerror name="password"/>
    <div class="d-grid mb-3">
      <button type="submit" class="btn btn-success">دخول</button>
    </div>
   </form>
   <p> لديك حساب ؟ <a href="{{ route('login')}}">سجل دخولك الأن !</a></p>
  </div>
@endsection