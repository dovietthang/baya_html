<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function cates(){
        return $this->belongsToMany(Category::class, CategoryItem::class, 'item_id', 'category_id');
    }
    public function sales(){
        return $this->belongsToMany(Coupon::class, ItemCoupon::class, 'item_id', 'coupon_id')->withTimestamps();
    }
    public function productSku(){
        return $this->hasMany(Sku::class, 'product_id');
    }
    public function comboItem(){
        return $this->hasMany(ComboItem::class, 'combo_id');
    }
    public function skuId(){
        return $this->productSku->pluck('id');
    }
}
