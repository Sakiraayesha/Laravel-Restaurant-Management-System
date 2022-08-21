<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function viewOrder(){
        $activeOrder = Auth::user()->orders()->where('status', false)->latest()->first();
        $prevOrders =  Auth::user()->orders()->where('id', '!=' , $activeOrder->id)->latest()->take(5)->get();

        return view("order", compact("activeOrder", "prevOrders"));
    }

    public function orders(){
        $orders = Order::latest()->get();
        return view("admin.orders", compact("orders"));
    }

    public function deleteOrder($id){
        Order::find($id)->delete();
        return redirect('/orders');
    }

    public function updateOrder($id){
        Order::find($id)->update(['status' => true]);
        return redirect('/orders');
    }
}
