@extends('../_partials.main')
@section('title', 'إضافة دٌفعة جديدة')
@section('main')
<div class="row">
                   <!-- card info -->
                    <div class="col-lg-6 mx-auto my-auto">
                        <h3 class="h2 mt-2 mb-3 text-center">
                            إضافة دٌفعة جديدة 
                        </h3>
                        <x-product.client-product-card :client="$client" :product="$product" :pay="$to_pay" />
                          <!-- form -->
                       <form action="{{route('payment.store',['id' => $product->id,'client_id' => $client->id])}}" method="post">
                            @csrf
                            <x-main.form-field name="amount" label="مبلغ الدفعة" type="text" />
                            <x-main.forminputerror name="amount"/>
                            <div class="d-grid mb-3">    
                            <button class="btn btn-success h3" type="submit">إضافة</button>
                            </div>
                        </form>
                   </div>
               </div>
@endsection
