<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function new_view(int $id , int $client_id, int $to_pay)  {
        $product=Product::find($id);
        $product_price=$product->product_prix;
        $client=Client::find($client_id);
        return view('app.Clients.payment.create',compact('product','client','to_pay','product_price'));
    }

    function create(Request $request,int $id,int $client_id){
        $product = Product::findOrfail($id);
        $totalPayments = $product->payments()->sum('amount');
        $remainingAmount = $product->product_prix - $totalPayments;
        $data=$request->validate([
            'amount' => 'required|numeric|max:'.$remainingAmount,
        ]);        
        $data['product_id']=$id;
        Payment::create($data);
        return redirect()->route('products.view',['id' => $data['product_id'],'client_id' => $client_id])
        ->with('msg-color','success')
        ->with('message','تمت إضافة معلومات المنتوج بنجاح');
    }

    function single_view(int $id,$client_id){
        $payment=Payment::findOrfail($id);
        $client=Client::find($client_id);
        return view('app.Clients.payment.view',compact('product','client'));
    }
    function edit(int $payment_id ,int $product_id,int $client_id,int $to_pay) {
        $payment=Payment::find($payment_id);
        $client=Client::find($client_id);
        $product=Product::find($product_id);
        return view('app.Clients.payment.edit',compact('payment','client','product','to_pay')); 
    }

    function update(Request $request,int $id,int $client_id){
        $data=$request->validate([
            'amount' => 'required',
        ]);
        $payment=Payment::find($id);
        $payment->update($data);
        return redirect()->route('products.view',['id' => $payment->product_id,'client_id' => $client_id])
        ->with('msg-color','success')
        ->with('message','تم تعديل معلومات المنتوج بنجاح');
    }
    function destroy(int $payment_id ,int $client_id){
        $payment=Payment::find($payment_id);
        $id=$payment->product_id;
        $payment->delete();
        return redirect()->route('products.view',['id' => $id,'client_id' => $client_id])
        ->with('msg-color','danger')
        ->with('message','تم حذف معلومات المنتوج بنجاح');
    }
}
