<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountSpin extends Model
{
    use HasFactory;
    public function spinItem(){
        return $this->hasOne(SpinItem::class,'id', 'spin_item_id');
    }
}
