<x-main.main pagetitle="معلومات الدٌفعات">
<x-main.bar name="لوحة معلومات الزبون"/>
<x-client.clientinfo :client="$client">
<a class="card-text h4  mt-2" href="{{ route('clients.view',$client->id) }}">{{ "الذهاب إلى صفحته"}}</a>
</x-client.clientinfo>
<x-main.bar name="معلومات المنتوج"/>
<x-product.product-table :product="$product" :topay="$data['produc_to_pay']" :client="$client" />
<x-main.bar name="سجل الدٌفعات">
{{-- slot to view print button --}}
@can('update', $client)
@if (!$data['produc_to_pay'] == 0 )
<a href="{{route('payment.store-view',['id' => $product->id, 'client_id' => $client->id,'to_pay' => $data['produc_to_pay']])}}" class="btn btn-dark">إضافة دٌفعة جديدة</a>
@endif   
@endcan
</x-main.bar> 
<x-payment.payment-table :payments="$payments" :client="$client" :product="$product" :topay="$data['produc_to_pay']"/>

</x-main.main>