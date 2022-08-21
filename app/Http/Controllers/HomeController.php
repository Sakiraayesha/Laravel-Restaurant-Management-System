<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index(){
        $menu = Menu::all();
        $chefs = Chef::all();

        if(Auth::user()){
            if(!session('cartTotal')){
                $cartTotal = Cart::where('user_id', Auth::user()->id)->where('status', 0)->get()->count();
                session(['cartTotal' => $cartTotal]);
            } 
        } 

        return view("home", compact("menu", "chefs"));
    }
}
