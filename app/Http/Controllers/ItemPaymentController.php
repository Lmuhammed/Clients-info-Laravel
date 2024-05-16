<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Supplier;
use App\Models\ItemPayment;
use Illuminate\Http\Request;

class ItemPaymentController extends Controller
{
     
   /*  public function index()
    {
        //
    } */

    
    public function create(Request $request)
    {
        $data=$request->validate([
            'AuthPlus' => 'required',

        ]);

        $itemID=$request->AuthPlus;
        return view('Supplier.item_payment.create',compact('itemID'));
    }
 
    public function store(Request $request)
    {
        $data=$request->validate([
            'amount' => 'required',
            'AuthPlus' => 'required',

        ]);
        $data['item_id']=null;
        $data['item_id']=$data['AuthPlus'];
        unset($data['AuthPlus']);
        ItemPayment::create($data);
        return redirect()->route('ItemPayment.show',$data['item_id'])
        ->with('message', 'تم إضافة دفعة جديدة للعنصر بنجاح')
        ->with('msg-color','success');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $itemId)
    {
        $item=Item::find($itemId);
        $itemPayment=$item->payments;
        $supplier=Supplier::find($item->supplier_id);
        return view('Supplier.item.view',compact('item','itemPayment','supplier'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $itemID)
    { 
        $payment=ItemPayment::find($itemID);
        return view('Supplier.item_payment.edit',compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $itemID)
    {
        $itemPayment=ItemPayment::find($itemID);
        $id_item=$itemPayment->item_id;

        $data=$request->validate([
            'amount' => 'required',
        ]);
        $data['item_id']=$id_item;
        $itemPayment->update($data);
        return redirect()->route('ItemPayment.show',$id_item)
        ->with('message', 'تم تعديل معلومات دفعة العنصر بنجاح')
        ->with('msg-color','warning');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $itemID)
    {
        $itemPayment=ItemPayment::find($itemID);
        $id_item=$itemPayment->item_id;
        $itemPayment->delete();
        return redirect()->route('ItemPayment.show',$id_item)
        ->with('message', 'تم حذف دفعة العنصر بنجاح')
        ->with('msg-color','danger');

    }
}
