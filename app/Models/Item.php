<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price_per_item',
        'number',
        'items_price',
        'supplier_id',
    ];

    public function Supplier()
    {
        return $this->belongsTo(Supplier::class);
    } 
    public function payments()
    {
        return $this->hasMany(ItemPayment::class);
    }

}
