<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranscation extends Model
{
    protected $table = 'product_transaction';
    protected $guarded = [];
    use HasFactory;

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
