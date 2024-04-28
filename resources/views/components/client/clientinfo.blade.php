<div class="card gold-effect mb-4">
    <div class="card-body">
      <h6 class="card-subtitle text-muted">الإسم الكامل</h6>
      <p class="card-text h4  mt-2">{{ $client->full_name}}</p>
      <h6 class="card-subtitle mb-2 text-muted">رقم الهاتف</h6>
      <p class="card-text h4 mt-2">{{ $client->phone}}</p>
      <h6 class="card-subtitle  mt-2 text-muted">التقارير - PDF</h6>
      {{-- <a class="btn btn-secondary mt-2" href="{{ htmlspecialchars(route('pdf.info',$client->id).'#print') }}">بطاقة معلومات الزبون</a> --}}
      <a class="btn btn-success mt-2" href="{{ htmlspecialchars(route('pdf.payment',$client->id).'#print') }}">بطاقة الفاتورة</a>
    </div>
  </div>