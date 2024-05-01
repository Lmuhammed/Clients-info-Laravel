<div style="width: 80%">
  <table class="table gold-effect">
    <thead class="table-dark">
          <tr>
          <th>{{ "المنتوج"}}</th>
          <th>{{"ثمنه"}}</th>
          <th>{{ "تاريخ الإضافة"}}</th>
          <th>{{ "تاريخ أخر تعديل"}}</th>
        </tr>
    </thead>
      <tbody>
        <tr>
          <td>{{$product->product_name }}</td>
          <td>{{$product->product_prix }}</td>
          <td>{{ date('Y-m-d', strtotime($product->created_at)) }}</td>
          <td>{{ date('Y-m-d', strtotime($product->updated_at)) }}</td>
        </tr>
      </tbody>
    </table>
</div>

