<div class="row justify-content-between mb-2">
    <div class="col-lg-6 col-sm-6 col-md-6">
            <h3 class="h1">
              معلومات الزبون
            </h3>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-2">            
          <form action="{{ route('clients.destroy',$client->id) }}" method="Post">
            @csrf
            @method('DELETE')
            <a class="btn btn-secondary" href="{{ route('clients.edit',$client->id) }}">تعديل</a>
            <button type="submit" class="btn btn-danger">حذف</button>
            </form>
        </div>
    </div>