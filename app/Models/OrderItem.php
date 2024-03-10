<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    public function order(){
        return $this->hasOne(Order::class, 'id', 'order_id');
    }

    public function productSku(){
        return $this->hasOne(Sku::class, 'id', 'sku_id');
    }
}
