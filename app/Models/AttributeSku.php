<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeSku extends Model
{
    use HasFactory;
    protected $table = 'attribute_sku';
    public function color(){
        return $this->hasOne(Color::class, 'id', 'attribute_color_id');
    }
    public function size(){
        return $this->hasOne(Size::class, 'id', 'attribute_size_id');
    }
}
