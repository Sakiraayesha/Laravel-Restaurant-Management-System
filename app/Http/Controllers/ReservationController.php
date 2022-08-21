<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function makeReservation(){

        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'guests' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        if(request('email')){
            $data['email'] = request('email');
        } 
        if(request('message')){
            $data['message'] = request('message');
        } 

        Reservation::create($data);

        if(!Auth::user() || Auth::user()->usertype == '0'){
            return redirect("/")->with('reservationSuccess', "Table for {$data['guests']} has been reserved!");
        }else{
            return redirect("/reservations");
        }
    }

    public function addReservation(){
        return view("admin.addreservation");
    }

    public function updateReservation($id){
        $reservation = Reservation::find($id);
        return view("admin.addreservation", compact("reservation"));
    }

    public function reservations(){
        $reservations = Reservation::all();
        return view("admin.reservations", compact("reservations"));
    }

    public function deleteReservation($id){
        Reservation::find($id)->delete();
        return redirect()->back();
    }  
    
    public function storeUpdatedReservation($id){

        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'guests' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);

        if(request('email')){
            $data['email'] = request('email');
        } 
        if(request('message')){
            $data['message'] = request('message');
        } 
        
        Reservation::find($id)->update($data);

        return redirect('/reservations');
    }
}
