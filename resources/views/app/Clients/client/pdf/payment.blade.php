@php
$data="فاتورة ";
$data.="$client->full_name - $Todaydate";
@endphp
<x-main.main :pagetitle="$data">
<div class="mt-0 mb-2 h2 text-center">
  <div class="row">
    <div class="col-6">
  <h1>فاتورة</h1>
    </div>
    <div class="col-6">
        <div class="d-grid mb-2 mt-2 mx-auto my-auto" style="width: 50%;">
        <button class="btn btn-success btn-lg d-print-none" onclick="print()" id="print">طباعة التقرير</button>
     </div>

    </div>
  </div>
    <!-- <h1>بطاقة الفاتورة ، الزبون {{ $client->full_name}} </h1> -->
   <div class="d-none d-print-block">
    {{ env('CITY');}} في <span>{{ $Todaydate }}</span>
   </div>
  </div>
    <div class="row">
               <h1 class="text-center" >معلومات الزبون</h1>
      <div class="col-lg-8 col-sm-10 col-md-6">
      <x-client.clientinfo :client="$client" /> 
      </div>
    </div>
    {{-- product --}}
    <div class="row">
      <div class="col-lg-8 col-sm-10 col-md-6">
        @php
        $id=0;
      @endphp
         
         <h1 class="text-center" >لائحة المشتريات</h1>
          @foreach($invoiceData as $key)
               <div>
                <h3>{{ $key["product"]->product_name }}</h3>
                <p><strong> الثمن :</strong> {{ $key["product"]->product_prix }}</p>
                <p><strong>تم دفع :</strong> {{  $key["totalPaid"] }}</p>
                <p><strong>الباقي :</strong>  {{  $key["outstandingBalance"] }} </p>
                <hr>
                </div>

            @endforeach 
       
          <h1 class="text-center" >إجمالي المدفوعات</h1>
          <p><strong>تم دفع :</strong> {{ $allprodNumbers["totalPaid"] }}</p>
          <p><strong>الباقي :</strong>  {{  $allprodNumbers["outstandingBalance"] }} </p>
   </div>
      
      <div class="border: 1px solid black;">
        <h1 class="h3">التوقيع أو الختم</h1>
      </div>
      <div style="width:300px;height: 100px;border: 2px solid black;padding: 10px;">

      </div>
      
      </div>
    </div>
</x-main.main>