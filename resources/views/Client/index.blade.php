@extends('../_componets.main')
@section('main')
<div class="row justify-content-between">
        <div class="col-3">
                <h3 class="h1">
                    لائحة الزبناء
                </h3>
            </div>
            <div class="col-2">            
            <a class="btn btn-dark" href="{{ route('clients.store-view') }}">إضافة زبون جديد</a>
            </div>
        </div>
        <main class="pt-3 py-3 my-3 mx-3">
            <table class="table table-striped border border-4">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">الإسم الكامل</th>
                      <th scope="col">الهاتف</th>
                      <th scope="col">العمليات</th>
                    </tr>
                  </thead>
                  @php
                   $i=0;
                  @endphp 
                  @foreach ($clients as $client)
                  @php
                   $i++;
                  @endphp 
                  <tbody>
                    <tr>
                      <th scope="row">{{$i}}</th>
                      <td>{{$client->full_name}}</td>
                      <td>{{$client->phone}}</td>
                      <td>
                        <div class="d-grid gap-2 d-md-block">
                        <form action="{{ route('clients.destroy',$client->id) }}" method="Post">
                           <a class="btn btn-success" href="{{ route('clients.view',$client->id) }}">عرض</a>
                            <a class="btn btn-secondary" href="{{ route('clients.edit',$client->id) }}">تعديل</a>
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
        </main>
        <div class="mx-3 my-3 px-3 py-3"> 
        <!-- {{ $clients->links() }} -->
        </div>
@endsection
