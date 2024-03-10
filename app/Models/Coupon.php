<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    public function itemCoupon()
    {
        return $this->hasMany(ItemCoupon::class, 'coupon_id');
    }
    public static function getSaleProduct($product_id)
    {
        $getPrice = 0;
        $text = '';
        $now = Carbon::now();
        $productSku = Sku::find($product_id);
        if (isset($productSku)) {
            if ($productSku->sell_price > 0 && $productSku->sell_price < $productSku->price) {
                $getPrice = $productSku->sell_price;
                $precent = 100 - ($productSku->sell_price / $productSku->price) * 100;
                $text = number_format($precent, 0, '.', '') . '%';
            } else {
                $product = $productSku->product;
                if ($product) {
                    $coupons = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                        ->where('coupons.status', 1)->where('coupons.type_coupon', 'products')->where('item_coupons.item_id', $product->id)->first();
                    if (!$coupons) {
                        $cateId = $product->category_id;
                        $coupons = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                            ->where('coupons.status', 1)->where('type', 'percent price')->where('coupons.type_coupon', 'categories')
                            ->where('item_coupons.cate_id', $cateId)->orderBy('price_value', 'desc')->first();
                        if (!$coupons) {
                            $coupons = Coupon::join('item_coupons', 'coupons.id', '=', 'item_coupons.coupon_id')
                                ->where('coupons.status', 1)->where('type', 'fixed price')->where('coupons.type_coupon', 'categories')
                                ->where('item_coupons.cate_id', $cateId)->orderBy('price_value', 'desc')->first();
                        }
                    }
                    if ($coupons) {
                        if (($coupons->date_start <= $now && $coupons->date_end >= $now)
                            || ($coupons->date_start <= $now && $coupons->date_end == null)
                            || ($coupons->date_start == null && $coupons->date_end == null)
                        ) {
                            if ($coupons->type == 'percent price') {
                                $getPrice = $productSku->price * ((100 - $coupons->price_value) / 100);
                                $text = $coupons->price_value . '%';
                            } else {
                                $getPrice = $productSku->price - $coupons->price_value;
                                $precent = 100 - ($coupons->price_value / $productSku->price) * 100;
                                $text = number_format($precent, 1, '.', '') . '%';
                            }
                        }
                    }
                }
            }
        }
        return collect(['getPrice' => $getPrice, 'text' => $text]);
    }
}
