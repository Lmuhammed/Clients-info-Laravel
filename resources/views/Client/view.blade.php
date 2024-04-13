@extends('../_componets.main')
@section('main')
<div class="row justify-content-between mt-3">
            <div class="col-4">
                <h3 class="h1">
                    معلومات التلميذ
                </h3>
            </div>
           <!--  <div class="col-3">
                <button class="btn btn-dark" type="button">العودة الى الصفحة الرئيسية</button>
            </div> -->
        </div>
        <main class="pt-3 py-3 my-3 mx-3">
            <div class="card border border-4" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{asset('profile.png')}}" class="card-img-top border border-4" alt="picture">
                    <!-- Picture Free for personal and commercial use -->
                  <h6 class="card-subtitle mt-3 text-muted">الإسم الكامل</h6>
                  <h5 class="card-title mt-2">{{ $client->full_name}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">رقم الهاتف</h6>
                  <p class="card-text">
                  {{ $client->phone}}
                  </p>
                  <h6 class="card-subtitle mb-2 text-muted">العمليات</h6>
                  <div class="d-grid gap-2 d-md-block">
                  <form action="{{ route('clients.destroy',$client->id) }}" method="Post">
                  @csrf
                  @method('DELETE')
                  <a class="btn btn-info" href="{{ route('clients.edit',$client->id) }}">تعديل</a>
                  <button type="submit" class="btn btn-danger">حذف</button>
                  <button type="button" class="btn btn-warning" onclick="print()">تصدير ك PDF</button>
                  </form>
                  </div>
                </div>
              </div>
              <div class="row justify-content-between mt-3">
                <div class="col-4">
                    <h3 class="h1">
                        معلومات المنتوج
                    </h3>
                </div>
                <div class="col-2">
                    <button class="btn btn-dark" type="button">إضافة</button>
                </div>
            </div>
              <!-- table -->
              <table class="table table-striped border border-4">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">المنتوج</th>
                      <th scope="col">ثمنه</th>
                      <th scope="col">المدفوع</th>
                      <th scope="col">الباقي</th>
                      <th scope="col">العمليات</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>كرسي</td>
                      <td>1000</td>
                      <td>200</td>
                      <td>
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-success" type="button">عرض</button>
                            <button class="btn btn-secondary" type="button">تعديل</button>
                            <button class="btn btn-danger" type="button">حذف</button>
                          </div>
                      </td>
                    </tr>
                  </tbody>
            </table>
        </main>
@endsection
