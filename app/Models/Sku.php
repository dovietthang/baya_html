<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasOne(Product::class,'id', 'product_id');
    }
    public function color(){
        return $this->hasOne(Color::class,'id', 'color_id');
    }
    public function colors($ids){
        return Color::wherein('id', $ids)->where('status', 1)->get();
    }
    public function sizes($ids){
        return Size::wherein('id', $ids)->where('status', 1)->get();
    }
    public function size(){
        return $this->hasOne(Size::class,'id', 'size_id');
    }
}
