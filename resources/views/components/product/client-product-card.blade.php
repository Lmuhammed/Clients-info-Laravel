<div class="card border h3 border-2"> 
    <div class="card-body">
     <p class="h4"> الزبون</p>
        <a class="text-decoration-none" href="{{route('clients.view',$client->id)}}">{{$client->full_name}}</a>
         <p class="h4"> المنتوج</p>
         <a class="text-decoration-none" href="{{route('products.view',['id' => $product->id, 'client_id' => $client->id])}}">{{$product->product_name}}</a>
        <h6 class="card-subtitle h4 mb-2">الثمن</h6>
        <p class="card-text">
         {{ $product->product_prix}}
        </p>
        <h6 class="card-subtitle h4 mb-2">الباقي</h6>
        <p class="card-text">
        {{ $pay  }}
        </p>
    </div>
</div>