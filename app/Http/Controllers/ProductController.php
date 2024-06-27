<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    function new_view(int $id)  {
        $client=Client::find($id);
        return view('app.Clients.product.create',compact('id','client'));
    }
    function create(Request $request,int $id){
        $data=$request->validate([
            'product_name' => 'required',
            'product_prix' => 'required',
        ]);
        $data['client_id']=$id;
        Product::create($data);
        return redirect()->route('clients.view',$id)
        ->with('msg-color','success')
        ->with('message','تم تعديل معلومات المنتوج بنجاح');
    }
    function single_view(int $id,int $client_id){
        $product=Product::findOrfail($id);
        $client=Client::find($client_id);
        $payments = $product->payments;
        $amoutSum = $product->payments->sum(function ($payment) {
        return $payment->amount;
        });
        $data = array(
            'product_amout' => $amoutSum,
            'product_price' => $product->product_prix,
            'produc_to_pay' => ($product->product_prix)-$amoutSum
        );
        return view('app.Clients.product.view',compact('product','client','payments','data'));
    }
    function edit(int $id , int $client_id) {
        $products=Product::find($id);
        $client=Client::find($client_id);
        return view('app.Clients.product.edit',compact('products','client_id','client')); 
    }
    function update(Request $request,int $id,int $client_id){
        $data=$request->validate([
            'product_name' => 'required',
            'product_prix' => 'required',
        ]);
        $product=Product::find($id);
        $product->update($data);
        return redirect()->route('clients.view',$client_id)
        ->with('msg-color','success')
        ->with('message','تم تعديل معلومات المنتوج بنجاح');
    }
    function destroy(int $id ,int $client_id){
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('clients.view',$client_id)
        ->with('msg-color','danger')
        ->with('message','تم حذف معلومات المنتوج بنجاح');

    }
}
