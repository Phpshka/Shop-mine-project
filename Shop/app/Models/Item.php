<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'price',
        'size',
        'count',
        'gender',
        'brand_id',
        'category_id'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function orders(){
        return $this->belongsToMany(Order::class, 'order_products', 'item_id', 'order_id');
    }
    public function images(){
        return $this->hasMany(ItemImage::class,'item_id');
    }
    public function sizes(){
        return $this->hasMany(Size::class);
    }
}
