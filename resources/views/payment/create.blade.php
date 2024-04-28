@extends('../_partials.main')
@section('main')
<div class="row">
                   <!-- card info -->
                    <div class="col-lg-6 mx-auto my-auto">
                        <h3 class="h2 mt-2 mb-3 text-center">
                            إضافة دٌفعة جديدة 
                        </h3>
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
                                 {{ $to_pay }}
                                </p>
                            </div>
                           </div>
                            <!-- form -->
                       <form action="{{route('payment.store',['id' => $product->id,'client_id' => $client->id])}}" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="amount" class="form-label h3">مبلغ الدفعة</label>
                                <input type="text" class="form-control" id="amount" name="amount">
                             </div>
                        {{-- Component show error --}}
                        <x-main.forminputerror name="amount"/>
                            <div class="d-grid mb-3">    
                            <button class="btn btn-success h3" type="submit">إضافة</button>
                            </div>
                        </form>
                   </div>
               </div>
@endsection
