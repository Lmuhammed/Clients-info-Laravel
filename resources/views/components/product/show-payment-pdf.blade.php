<div>
    <dl class="dl-horizontal border border-1 gold-effect">
        <dt>{{ "مبلغ الدفعة"}}</dt>
        <dd>{{$payment->amount }}</dd>
        <dt>{{ "تاريخ الدفع"}}</dt>
        <dd>{{ date('Y-m-d', strtotime($payment->created_at))}}</dd>
        <dt>{{ "تاريخ أخر تعديل"}}</dt>
        <dd>{{ date('Y-m-d', strtotime($payment->updated_at))}}</dd>
    </dl>
</div>