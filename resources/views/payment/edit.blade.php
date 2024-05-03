@extends('../_partials.main')
@section('title', 'تعديل معلومات الدٌفعة')
@section('main')
<div class="row">
                   <!-- card info -->
                    <div class="col-lg-6 mx-auto my-auto">
                        <h3 class="h2 mt-2 mb-3 text-center">
                            تعديل معلومات دٌفعة قديمة 
                        </h3>
                        <x-product.client-product-card :client="$client" :product="$product" :pay="$to_pay" />
                            <!-- form -->
                            <form action="{{route('payment.update',['id' => $payment->id,'client_id' => $client->id])}}" method="post">
                            @csrf
                            @method('PUT')
                             <x-main.form-field name="amount" label="مبلغ الدفعة" type="text">
                                {{ $payment->amount }}
                             </x-main.form-field>
                            <x-main.forminputerror name="amount"/>
                         {{-- Component show error --}}
                            <div class="d-grid mb-3">    
                            <button class="btn btn-success h3" type="submit">تعديل</button>
                            </div>
                        </form>
                   </div>
               </div>
@endsection
