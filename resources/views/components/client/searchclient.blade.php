<div class="row justify-content-between mb-3 mt-3 border border-2 pt-2 pb-2" >
    <div class="col-3">
            <h3 class="h1">
                البحث
            </h3>
        </div>
         <div class="col-4">            
              <form class="d-flex" role="search" action="{{route('clients.search')}}">
                @csrf
                <input class="form-control me-2" type="search" placeholder="إبحث عن زبون بالإسم أو الهاتف" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">إبحث</button>
              </form>
            </div>
</div>