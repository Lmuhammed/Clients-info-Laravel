<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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
         return view('Supplier.product.create',compact('supplier'));
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
        return view('Supplier.supplier.view',compact('supplier'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $supplier=Supplier::find($item->supplier_id);
        return view('Supplier.product.edit',compact('item','supplier'));

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
        return view('Supplier.supplier.view',compact('supplier'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $id=$item->id;
        $supplier=Supplier::find($id);
        $item->delete();
        return redirect()->route('suppliers.show',[$supplier]);
    }
}
