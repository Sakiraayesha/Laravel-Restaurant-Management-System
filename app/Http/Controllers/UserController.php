<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Customers
    public function users(){
        $users = User::whereIn('usertype', [0])->get();
        return view("admin.users",compact("users"));
    }

    public function deleteUser($id){
        User::find($id)->delete();
        return redirect('/users');
    }    

    //Admins
    public function admins(){
        if(Auth::user() && Auth::user()->usertype == '1'){
            $users = User::whereIn('usertype', [1])->get();
            return view("admin.admins", compact('users'));
        }
        return redirect('/');
    }

    public function addAdmin(){
        return view("admin.addadmin");
    }

    public function storeAdmin(){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data['usertype'] = '1';

        $imagePath = request('image')->store('admin', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();
        $data['profile_photo_path'] = $imagePath;

        $hashedPassword = Hash::make(request('password'));
        $data['password'] = $hashedPassword;
        
        User::create($data);

        return redirect('/admin');
    }

    public function deleteAdmin($id){
        User::find($id)->delete();
        return redirect('/admin');
    }

    public function updateAdmin($id){
        $admin = User::find($id);
        return view("admin.addadmin", compact("admin"));
    }

    public function storeUpdatedAdmin($id){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('admin', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();

            $data['profile_photo_path'] = $imagePath;
        }

        if(request('password')){
            $hashedPassword = Hash::make(request('password'));
            $data['password'] = $hashedPassword;
        }

        User::find($id)->update($data);

        return redirect('/admin');
    }
}
