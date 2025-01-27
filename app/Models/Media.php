<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media extends Model
{
    use HasFactory;

    protected $fillable = ["path"];

    public function product(){
             return $this->belongsTo(products::class, 'product_id');
    }
}
