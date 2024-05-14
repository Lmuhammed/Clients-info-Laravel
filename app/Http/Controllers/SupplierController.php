<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers=Supplier::paginate(8);
        return view('Supplier.supplier.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Supplier.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        Supplier::create($data);
        return redirect()->route('suppliers.index')
        ->with('message', 'تمت إضافة زبون جديد بنجاح')
        ->with('msg-color','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('Supplier.supplier.view',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('Supplier.supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $data=$request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $supplier->update($data);
        return redirect()->route('suppliers.index')
        ->with('msg-color','success')
        ->with( 'message','تم تعديل معلومات الزبون بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index')
        ->with('message', 'تمت حذف معلومات المورد بنجاح')
        ->with('msg-color','danger');
    }
}
