<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    public function subTotal(){
        $subtotal = 0;
        foreach($this->carts as $item){
            $subtotal += $item->menu->price * $item->quantity;
        }

        return number_format($subtotal, 2);
    }

    public function getTax($subtotal){
        $tax = $subtotal * 0.05;
        return number_format($tax, 2);
    }

    public function totalPrice($subtotal, $tax){
        $total = $subtotal + $tax + 3.50;
        return number_format($total, 2);
    }

    public function getPrevOrdersTotalPrice(){
        $subtotal = $this->subTotal();
        $tax = $this->getTax($subtotal);
        $total = $subtotal + $tax + 3.50;
        return number_format($total, 2);
    }
}
