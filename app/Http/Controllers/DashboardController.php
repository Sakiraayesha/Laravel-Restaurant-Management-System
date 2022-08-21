<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function dashboard(){
        if(Auth::user() && Auth::user()->usertype == '1'){
            $lastMonth = Carbon::now()->subDays(30)->toDateTimeString();
            $today = Carbon::today()->toDateString();
            $fromDate = Carbon::parse($lastMonth)->format('y-m-d');

            $orders = Order::where('created_at', '>=', $lastMonth)->get();
            $totalOrder = $orders->count();

            $revenue = 0;
            $topSelling = array();

            foreach($orders as $order){
                foreach($order->carts as $item){
                    $revenue += $item->menu->price * $item->quantity;

                    if(isset($topSelling[$item->menu->id])){
                        $topSelling[$item->menu->id]['sold'] += $item->quantity;
                    }
                    else{
                        $topSelling[$item->menu->id] = [
                            'item' => $item->menu,
                            'sold' => $item->quantity
                        ];
                    }
                }
            }
            $keys = array_column($topSelling, 'sold');
            array_multisort($keys, SORT_DESC, $topSelling);
            
            $guests = User::where('usertype', '0')->count();

            return view("admin.dashboard", compact('fromDate', 'today', 'revenue', 'totalOrder', 'guests', 'topSelling'));
        }
        return redirect()->back();
    }
}
