<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountSpin;
use App\Models\Spin;
use App\Models\SpinItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SpinController extends Controller
{
    public function editSpin(){
        $spin = Spin::find(1);
        $itemSpins = SpinItem::where('spin_id', @$spin->id)->get();
        return view('layout-admin.pages.spin.edit', compact('spin', 'itemSpins'));
    }

    public function updateSpin(Request $rq){
        $spin = Spin::find($rq->id);
        $spin->title = $rq->title;
        $spin->title_1 = $rq->title1;
        $spin->title_2 = $rq->title2;
        $spin->condition  = $rq->condition;
        $spin->expired  = $rq->expired;
        $spin->expired_num  = $rq->expired_num;
        $spin->duration  = $rq->duration;
        $spin->spin  = $rq->spin;
        $spin->show_text  = $rq->show_text;
        $spin->status  = $rq->active ? $rq->active : 0;
        $spin->rate  = $rq->rate;
        $spin->photo = $rq->photo ? $rq->photo : NULL;
        $spin->photo_icon = $rq->photo_icon ? $rq->photo_icon : NULL;
        if($spin->save()){
            $itemIDS = [];
            foreach ($rq->invoice as $key => $item) {
               if($item['spin_id']){
                $spinItem = SpinItem::find($item['spin_id']);
               }
               else{
                $spinItem = new SpinItem();
               }
               $spinItem->spin_id = $spin->id;
               $spinItem->text = $item['title'];
               $spinItem->message = $item['message'];
               $spinItem->content = $item['content'];
               $spinItem->amount = $item['amount'];
               $spinItem->type = $item['type'] == 1 ? 1 : 0;
               $spinItem->save();
               array_push($itemIDS, $spinItem->id);
            }
            SpinItem::whereNotIn('id', $itemIDS)->delete();
        }
        return response()->json([
            'type' => 'update',
            'success' => true,
            'message' => __('Update') . ' ' . __('spin') . ' '. __('success') . ' !'
        ]);
    }

    public function gameCheck(Request $rq){
        $accountSpin = AccountSpin::where('email', $rq->email)->orwhere('phone', $rq->phone)->first();
        if($accountSpin){
            return response()->json([
                'success' => true
            ]);
        }
        else{
            return response()->json([
                'success' => false
            ]);
        }
    }
    public function gameSend(Request $rq){
        $accountSpin = new AccountSpin();
        $accountSpin->code = $rq->code;
        $accountSpin->spin_item_id = $rq->gifId;
        $accountSpin->phone = $rq->phone;
        $accountSpin->email = $rq->email;
        $accountSpin->save();
        $tmpMail = $rq->email;
        $code = $rq->code;
        $gif = SpinItem::find($rq->gifId);
        Mail::send('layout-auth.pages.template-email-spin', compact('code', 'gif'), function ($message) use ($tmpMail){
            $message->to($tmpMail);
            $message->subject('[EDIFA] Xác nhận trúng thưởng');
        });
        return response()->json([
            'success' => true
        ]);
    }
}
