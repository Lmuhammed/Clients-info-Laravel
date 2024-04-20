@extends('../_componets.main')
@section('main')
<h3 class="text-center h1">
          لوحة الدخول
            </h3>
            <div class="row">
                <div class="col-6">
                    <form action="{{route('register.custom')}}" method="post">
                      @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">الإسم الكامل</label>
                            <input type="text" class="form-control" id="full_name" name="full_name">
                          </div>
                          @if ($errors->has('full_name'))
                                <span class="text-danger">{{ $errors->first('full_name') }}</span>
                          @endif
                        <div class="mb-3">
                            <label for="username" class="form-label">إسم المستخدم</label>
                            <input type="text" class="form-control" id="username" name="username">
                          </div>
                          @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                          @endif
                          <div class="mb-3">
                            <label for="password" class="form-label">كلمة السر</label>
                            <input type="password" class="form-control" id="password" name="password" >
                          </div>
                          @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                          @endif
                          <button class="btn btn-success" type="submit">تسجيل</button>
                          <div class="h3 mt-2 mb-2">
                          أو
                          </div>
                          <div class="form-group">
                        <span>ليس لديك حساب <a href="{{route('login')}}">قم بالتسجيل</a>
                      </span>
                        </div>
                    </form>
                </div>
            </div>
@endsection