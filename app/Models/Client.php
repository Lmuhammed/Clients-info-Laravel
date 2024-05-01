<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'phone',
        'created_by',
    ];

       
    public function CreatedBy()
    {
        return $this->belongsTo(User::class);
    } 
   
    
    public function products()
    {
        return $this->hasMany(product::class);
    }
}
