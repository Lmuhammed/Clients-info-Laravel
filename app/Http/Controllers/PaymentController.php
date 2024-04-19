<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\Payment;
use App\Models\product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function new_view(int $id , int $client_id)  {
        $product=product::find($id);
        $client=client::find($client_id);
        return view('payment.create',compact('product','client'));
    }

    function create(Request $request,int $id,int $client_id){
        $data=$request->validate([
            'amount' => 'required',
        ]);
        $data['product_id']=$id;
        Payment::create($data);
        return redirect()->route('products.view',['id' => $data['product_id'],'client_id' => $client_id])
        ->with('success','تمت إضافة معلومات المنتوج بنجاح');
    }

    function single_view(int $id,$client_id){
        $payment=Payment::findOrfail($id);
        $client=client::find($client_id);
        return view('payment.view',compact('product','client'));
    }
    function edit(int $payment_id , int $product_id,int $client_id) {
        $payment=Payment::find($payment_id);
        $client=client::find($client_id);
        $product=product::find($product_id);
        return view('payment.edit',compact('payment','client','product')); 
    }

    function update(Request $request,int $id,int $client_id){
        $data=$request->validate([
            'amount' => 'required',
        ]);
        $payment=Payment::find($id);
        $payment->update($data);
        return redirect()->route('products.view',['id' => $payment->product_id,'client_id' => $client_id])
        ->with('success','تم تعديل معلومات المنتوج بنجاح');
    }
    function destroy(int $payment_id ,int $client_id){
        $payment=Payment::find($payment_id);
        $id=$payment->product_id;
        $payment->delete();
        return redirect()->route('products.view',['id' => $id,'client_id' => $client_id])
        ->with('danger','تم حذف معلومات المنتوج بنجاح');
    }
}
