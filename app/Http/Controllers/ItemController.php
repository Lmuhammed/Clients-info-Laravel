<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ItemController extends Controller
{  
    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {  
        $data=$request->validate([
            'AuthPlus' => 'required',
        ]);
        $supplier=Supplier::find($data['AuthPlus']);
        // return redirect()->back();
         return view('Supplier.item.create',compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $data=$request->validate([
            'name' => 'required',
            'price_per_item' => 'required',
            'number' => 'required',
            'items_price' => 'required',
            'AuthPlus' => 'required',
        ]);
        $supplier=Supplier::find($data['AuthPlus']);
        $data['supplier_id']=null;
        $data['supplier_id']=$data['AuthPlus'];
        unset($data['AuthPlus']);
        Item::create($data);
        return redirect()->route('suppliers.show',$supplier)
        ->with('message', 'تمت إضافة العنصر بنجاح')
        ->with('msg-color','success');

    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('Supplier.item.view',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $supplier=Supplier::find($item->supplier_id);
        return view('Supplier.item.edit',compact('item','supplier'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $data=$request->validate([
            'name' => 'required',
            'price_per_item' => 'required',
            'number' => 'required',
            'items_price' => 'required',
        ]);
        $item->update($data);
        $supplier=Supplier::find($item->supplier_id);
        return redirect()->route('suppliers.show',$supplier)
        ->with('message', 'تم تعديل معلومات العنصر بنجاح')
        ->with('msg-color','warning');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    { 
        $supplier=Supplier::find($item->supplier_id);
        $item->delete();
        return redirect()->route('suppliers.show',$supplier)
        ->with('message', 'تم حذف العنصر بنجاح')
        ->with('msg-color','danger');
    }
}
