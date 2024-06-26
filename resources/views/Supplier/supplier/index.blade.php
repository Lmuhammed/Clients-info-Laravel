<x-main.main pagetitle="الصفحة الرئيسية - كل المُوردين">
<x-main.bar name="لائحة المُورد" class="col-1 py-2 px-2">
{{-- slot to add new client --}}
  <a class="btn btn-dark" href="{{ route('suppliers.create') }}">إضافة مُورد جديد</a>
</x-main.bar> 
<x-main.bar name="إبحث عن مُورد" class="col-5">
<form class="d-flex" role="search" action="#">
  @csrf
  <input class="form-control ms-3" type="search" placeholder="إبحث عن مُورد بالإسم أو الهاتف" aria-label="Search" name="search">
  <button class="btn btn-outline-success" type="submit">إبحث</button>
</form>
<x-main.forminputerror name="search"/>
</x-main.bar> 
        <main class="pt-3 py-3 my-3 mx-3">
          {{-- جدول الموردين --}}
        @if(! $suppliers->isEmpty())
        <table class="table table-striped gold-effect border border-4">
          <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">الإسم الكامل</th>
                      <th scope="col">الهاتف</th>
                      <th scope="col">العنوان</th>
                      <th scope="col">تاريخ الإضافة</th>
                      <th scope="col">تاريخ أخر تعديل</th>
                      <th scope="col">العمليات</th>
                    </tr>
                  </thead>
                  @php
                   $i=0;
                  @endphp 
                  @foreach ($suppliers as $supplier)
                  @php
                   $i++;
                  @endphp 
                  <tbody>
                    <tr>
                      <th scope="row">{{$i}}</th>
                      <td>{{$supplier->name}}</td>
                      <td>{{$supplier->phone}}</td>
                      <td>{{$supplier->address}}</td>
                      <td>{{date('Y-m-d', strtotime($supplier->created_at))}}</td>
                      <td>{{date('Y-m-d', strtotime($supplier->updated_at))}}</td>
                      <td>
                        <div class="d-grid gap-2 d-md-block">
                        <form action="{{ route('suppliers.destroy',$supplier) }}" method="Post">
                          <a class="btn btn-success" href="{{ route('suppliers.show',$supplier) }}">عرض</a>
                          <a class="btn btn-secondary" href="{{ route('suppliers.edit',$supplier) }}">تعديل</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                          </div>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
            </table>
          @else
           {{-- جدول فارغ --}}
        <span class="text-danger display-4">
            لا يوجد مُوردين ! 
        </span>
        @endif
        {{-- جدول الموردين --}}
        </main>
        @if ($suppliers->links())
          <div class="mx-3 my-3 px-3 py-3"> 
          {{ $suppliers->links() }}
          </div>
        @endif
</x-main.main>