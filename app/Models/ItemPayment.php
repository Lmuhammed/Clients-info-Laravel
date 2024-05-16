<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'item_id'
    ];
    
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
