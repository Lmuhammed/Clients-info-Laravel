<table class="table table-striped gold-effect border border-4">
    <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">الإسم الكامل</th>
                <th scope="col">الهاتف</th>
                <th scope="col">تاريخ الإضافة</th>
                <th scope="col">تاريخ أخر تعديل</th>
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
                <td>{{date('Y-m-d', strtotime($client->created_at))}}</td>
                <td>{{date('Y-m-d', strtotime($client->updated_at))}}</td>
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