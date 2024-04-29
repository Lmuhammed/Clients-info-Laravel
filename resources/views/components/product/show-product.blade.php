<div class="gold-effect">
    <div class="card text-bg-light mb-3 gold-effect" style="max-width: 18rem;">
        <div class="card-header">
            {{$product->product_name }}
        </div>
        <div class="card-body">
          <h5 class="card-title">ثمنه</h5>
          <p class="card-text"> {{$product->product_prix }}</p>
          <h5 class="card-title">تاريخ الإضافة</h5>
          <p class="card-text">{{ date('Y-m-d', strtotime($product->created_at)) }}</p>
          <h5 class="card-title">تاريخ أخر تعديل</h5>
          <p class="card-text">{{ date('Y-m-d', strtotime($product->updated_at)) }}</p>
        </div>
</div>
</div>