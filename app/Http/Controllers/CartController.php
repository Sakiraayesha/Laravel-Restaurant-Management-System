<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\User;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function addCart(){
        $data = request()->validate([
            'menu_id' => 'required',
            'quantity' => 'required'
        ]);

        Auth::user()->carts()->create($data);

        $cartTotal = session('cartTotal') + 1;
        session(['cartTotal' => $cartTotal]);

        return redirect()->back();
    }

    public function viewCart(){
        $cart = Cart::where('user_id', Auth::user()->id)->where('status', 0)->with('menu')->get();

        $subtotal = 0;
        foreach($cart as $item){
            $subtotal += $item->menu->price * $item->quantity;
        }
        
        return view("cart", compact("cart", "subtotal"));
    }

    public function updateCart(){
        $data = request()->validate([
            'id' => 'required',
            'quantity' => 'required'
        ]);

        if($data['quantity'] < 1){
            Cart::find($data['id'])->delete();
        }
        else{
            Cart::find($data['id'])->update(['quantity' => $data['quantity']]);
        }

        return redirect()->back();
    }

    public function checkout(){
        $cart = Cart::where('user_id', Auth::user()->id)->where('status', 0)->with('menu')->get();

        $order = Auth::user()->orders()->create();

        foreach($cart as $item) {
            $item->status = true;
            $item->order()->associate($order);
            $item->save();
        }

        session(['cartTotal' => 0]);

        return redirect("/order");
    }
}
