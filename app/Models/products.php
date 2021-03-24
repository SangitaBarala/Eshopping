<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'image_id',
        'product_name',
        'product_description',
        'product_in_stock',
        'price',
    ];

    public function category(){
        return $this->belongsTo(category::class, 'category_id');

    }
    public function media(){
        return $this->belongsTo(media::class, 'media_id');
    }
}
