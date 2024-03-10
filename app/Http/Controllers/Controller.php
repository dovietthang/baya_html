<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\Sku;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function changeLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
    public function dashboard(Request $rq)
    {
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Dashboard')],
        ];
        $products = Product::all();
        $users = User::where('role', 3)->get();
        $posts = Post::all();
        $orders = Order::all();

        $now = Carbon::now();
        if ($rq->year) {
            $now = new Carbon('first day of January' . $rq->year);
        }
        $yearCurrent = $now->year;
        $monthCurrent = $now->month;
        $orderDay = Order::where('status_method', '!=', 3)->whereDate('created_at', Carbon::now())->get();
        $orderActive = Order::where('status_method', '!=', 3)->whereDate('created_at', Carbon::now())->where('payment_status', 'paid')->get();
        $orderNot = Order::where('status_method', '!=', 3)->whereDate('created_at', Carbon::now())->where('payment_status', 'unpaid')->get();

        $tempOrderNot = Order::where('payment_status', 'unpaid')->where('status_method', '!=', 3);
        $tempOrderActive = Order::where('payment_status', 'paid')->where('status_method', '!=', 3);
        $temCost = Sku::query();

        $orderAllNot = $tempOrderNot->sum('total');
        $orderYearNot = $tempOrderNot->whereYear('created_at', $yearCurrent)->sum('total');
        $orderMonthNot = $tempOrderNot->selectRaw('month(created_at) month, sum(total) data')
            ->whereYear('created_at', $yearCurrent)
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
        $orderAllActive = $tempOrderActive->sum('total');
        $orderYearActive = $tempOrderActive->whereYear('created_at', $yearCurrent)->sum('total');
        $orderMonthActive = $tempOrderActive->selectRaw('month(created_at) month, sum(total) data')
            ->whereYear('created_at', $yearCurrent)
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
        $costSkuAll = $temCost->sum(DB::raw('cost * quantity'));

        $years = Order::select(DB::raw("YEAR(created_at) as year"))
            ->groupBy('year')->pluck('year')
            ->toArray();
        $years2 = Sku::select(DB::raw("YEAR(created_at) as year"))
            ->groupBy('year')->pluck('year')
            ->toArray();
        $listYears = array_unique([...$years2, ...$years]);

        rsort($listYears);
        $Months = range(1, 12);
        $tempOrder = $orderMonthActive->pluck('data', 'month')->toArray();
        $tempOrder2 = $orderMonthNot->pluck('data', 'month')->toArray();
        $Earning = array_map(function ($n) use ($tempOrder) {
            if (isset($tempOrder[$n])) {
                return $tempOrder[$n];
            } else {
                return 0;
            }
        }, array_values($Months));
        $NotEarning = array_map(function ($n) use ($tempOrder2) {
            if (isset($tempOrder2[$n])) {
                return $tempOrder2[$n];
            } else {
                return 0;
            }
        }, array_values($Months));

        return view('layout-admin.pages.dashboard', compact('products', 'users', 'posts', 'orders', 'Months', 'Earning', 'NotEarning',
        'listYears', 'yearCurrent', 'orderAllNot', 'orderYearNot', 'orderAllActive', 'orderYearActive', 'costSkuAll', 'orderDay', 'orderActive', 'orderNot'));
    }
}
