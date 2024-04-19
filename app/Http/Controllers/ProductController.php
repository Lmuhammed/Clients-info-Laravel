<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\Payment;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    function new_view(int $id)  {
        return view('product.create',compact('id'));
    }
    function create(Request $request,int $id){
        $data=$request->validate([
            'product_name' => 'required',
            'product_prix' => 'required',
        ]);
        $data['client_id']=$id;
        product::create($data);
        return redirect()->route('clients.view',$id)
        ->with('success','تمت إضافة معلومات المنتوج بنجاح');
    }
    function single_view(int $id,int $client_id){
        $product=product::findOrfail($id);
        $client=client::find($client_id);
        $payments = $product->payments;
        return view('product.view',compact('product','client','payments'));
    }
    function edit(int $id , int $client_id) {
        $products=product::find($id);
        return view('product.edit',compact('products','client_id')); 
    }
    function update(Request $request,int $id,int $client_id){
        $data=$request->validate([
            'product_name' => 'required',
            'product_prix' => 'required',
        ]);
        $product=product::find($id);
        $product->update($data);
        return redirect()->route('clients.view',$client_id)
        ->with('success','تم تعديل معلومات المنتوج بنجاح');
    }
    function destroy(int $id ,int $client_id){
        $product=product::find($id);
        $product->delete();
        return redirect()->route('clients.view',$client_id)
        ->with('danger','تم حذف معلومات المنتوج بنجاح');

    }
}
