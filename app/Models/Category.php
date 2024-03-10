<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function parent(){
        //get parent
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, CategoryItem::class, 'category_id', 'item_id');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, CategoryPost::class, 'category_id', 'item_id');
    }

    public function childCate()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public static function getAllIdChild(&$ids=[], $id)
    {
        $cates = Category::where('parent_id', $id)->get();
        foreach ($cates as $cate) {
            array_push($ids, $cate->id);
            if ($cate->id) {
                self::getAllIdChild($ids, $cate->id);
            }
        }
    }
    public static function getRoot(&$lists, $cate)
    {
       if($cate){
        $obj = new \stdClass();
        $obj->title = $cate->title;
        $obj->slug = $cate->slug;
        $obj->parent_id = $cate->parent_id;
        array_push($lists, $obj);
        if ($cate->parent_id != null) {
            self::getRoot($lists, $cate->parent);
        }
       }
    }
    public static function getRootId(&$lists, $cate)
    {
        $lists = $cate;
        if ($cate->parent_id != null) {
            self::getRootId($lists, $cate->parent);
        }
    }

}
