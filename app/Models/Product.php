<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_prix',
        'client_id'
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
