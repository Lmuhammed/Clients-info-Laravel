<div class="card gold-effect mb-4">
  <div class="card-body">
    <h6 class="card-subtitle text-muted">الإسم الكامل</h6>
    <p class="card-text h4  mt-2">{{ $client->full_name}}</p>
    <h6 class="card-subtitle mb-2 text-muted">رقم الهاتف</h6>
    <p class="card-text h4 mt-2">{{ $client->phone}}</p>
   <div>
    {{ $slot }}
   </div>
  </div>
</div>