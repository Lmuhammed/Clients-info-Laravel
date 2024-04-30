@extends('../_partials.main')
@section('main')
<x-main.bar name="لائحة الزبناء">
  {{-- slot to add new client --}}
  <a class="btn btn-dark" href="{{ route('clients.store-view') }}">إضافة زبون جديد</a>
</x-main.bar> 
      {{-- client search  --}}
<x-main.bar name="إبحث عن زبون">
{{-- slot to addclient search form --}}
<form class="d-flex" role="search" action="{{route('clients.search')}}">
  @csrf
  <input class="form-control me-2" type="search" placeholder="إبحث عن زبون بالإسم أو الهاتف" aria-label="Search" name="search">
  <button class="btn btn-outline-success" type="submit">إبحث</button>
</form>
</x-main.bar> 
        <main class="pt-3 py-3 my-3 mx-3">
        @if(! $clients->isEmpty())
        <x-client.all-client :clients="$clients"/>
        @else
        <span class="text-danger display-4">
            لا يوجد زبناء ! 
        </span>
        @endif
        </main>
        @if ($clients->links())
          <div class="mx-3 my-3 px-3 py-3"> 
          {{ $clients->links() }}
          </div>
         @endif
@endsection
