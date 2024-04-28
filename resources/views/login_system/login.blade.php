@extends('../_partials.main')
@section('main')
      <div class="row mt-4">
      <div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3">
        <div class="pt-3 pb-3 mt-3 mb-3">
          <h2 class="text-center mt-2 mb-2 pt-3"  >لوحة تسجيل الدخول</h2>
        </div>
      <form action="{{route('login.custom')}}" method="post">
        @csrf        
        <div class="input-group mb-3">
          <label for="username" class="input-group-text">إسم المستخدم</label>
          <input type="text" id="username" class="form-control" placeholder="مثال : ahmmed3, anas98 ...." name="username">
       </div>
       {{-- show errors --}}
       @if ($errors->has('username'))
        <span class="text-danger">{{ $errors->first('username') }}</span>
       @endif
       {{-- end show error  --}}
       <div class="input-group mb-3">
          <label for="password" class="input-group-text">كلمة السر</label>
          <input type="password" name="password" id="password" class="form-control">
       </div>
       {{-- show errors --}}
       @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
       @endif
       {{-- end show error  --}}
       <div class="d-grid mb-3">
          <button type="submit" class="btn btn-success">دخول</button>
       </div>
       </form>
       <p>ليس لديك حساب ؟ <a href="{{route('register')}}">أنشىء حساب</a></p>
      </div>
      </div>
@endsection