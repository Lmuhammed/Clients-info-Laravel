<x-main.main pagetitle="تعديل معلومات المنتوج">
<div class="row mt-4">
       
       <div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top border border-3">
           <h3 class="h2 text-center mt-3">
               معلومات الزبون
           </h3>
           <x-client.clientinfo :client="$client"/>
           <h3 class="h2 text-center mt-3">
               إضافة منتوج جديد
           </h3>
                  <form action="{{route('products.update',['id' => $products->id, 'client_id' => $client_id ])}}" method="POST">
                     @csrf
                     @method('PUT')
                       <x-main.form-field name="product_name" label="المنتوج" type="text">
                       {{ $products->product_name }}
                       </x-main.form-field>
                       {{-- Component show error --}}
                       <x-main.forminputerror name="product_name"/>
                       <x-main.form-field name="product_prix" label="ثمنه" type="text">
                       {{ $products->product_prix }}
                       </x-main.form-field>
                       {{-- Component show error --}}
                       <x-main.forminputerror name="product_prix"/>
                       <div class="d-grid mb-4">
                           <button class="btn btn-success" type="submit">تعديل</button>
                       </div>
                   </form>
       </div>
   </div>
</x-main.main>