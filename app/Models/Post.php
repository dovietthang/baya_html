<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function cates(){
        return $this->belongsToMany(Category::class, CategoryPost::class, 'item_id', 'category_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'added_by');
    }
}
