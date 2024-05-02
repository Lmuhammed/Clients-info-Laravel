@extends('../_partials.main')
@section('title', 'معلومات الدٌفعات ')
@section('main')
<x-main.bar name="لوحة معلومات الزبون"/>
<x-client.clientinfo :client="$client"/>
<x-main.bar name="معلومات المنتوج"/>
<x-product.product-table :product="$product" :topay="$data['produc_to_pay']" :client="$client" />
<x-main.bar name="سجل الدٌفعات">
{{-- slot to view print button --}}
@if (!$data['produc_to_pay'] == 0 )
  <a href="{{route('payment.store-view',['id' => $product->id, 'client_id' => $client->id,'to_pay' => $data['produc_to_pay']])}}" class="btn btn-dark">إضافة دٌفعة جديدة</a>
@endif
</x-main.bar> 
<x-payment.payment-table :payments="$payments" :client="$client" :product="$product" :topay="$data['produc_to_pay']"/>
@endsection
