<x-main.main pagetitle="تعديل معلومات الدٌفعة">
<div class="row">
                   <!-- card info -->
                    <div class="col-lg-6 mx-auto my-auto">
                        <h3 class="h2 mt-2 mb-3 text-center">
                            تعديل معلومات دٌفعة قديمة 
                        </h3>
                             <!-- form -->
                            <form action="{{route('ItemPayment.update',$payment->id)}}" method="post">

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
</x-main.main>