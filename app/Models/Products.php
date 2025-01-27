<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'product_name',
        'product_description',
        'product_in_stock',
        'price',
    ];
    protected $with = ['media'];

    public function category()
    {
        return $this->belongsTo(categories::class, 'category_id');

    }
    public function media()
    {
        return $this->hasMany(media::class, 'product_id' );
    }

    public function wishList()
    {
        return $this->belongsTo(WishList::class);

    }

    public function rating()
    {
        return $this->hasMany(Ratings::class);
    }
}
