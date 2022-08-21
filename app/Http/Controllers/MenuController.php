<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\Models\Menu;

class MenuController extends Controller
{
    public function menu(){
        $menu = Menu::all();
        return view("admin.menu", compact("menu"));
    }

    public function addMenu(){
        return view("admin.addmenu");
    }

    public function storeMenu(){

        $data = request()->validate([
            'title' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('menu', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();
        
        Menu::create([
            'title' => $data['title'],
            'desc' => $data['desc'],
            'price' => $data['price'],
            'image' => $imagePath
        ]);

        return redirect('/menu');
    }

    public function deleteMenu($id){
        Menu::find($id)->delete();
        return redirect('/menu');
    }

    public function updateMenu($id){
        $item = Menu::find($id);
        
        return view("admin.addmenu", compact("item"));
    }

    public function storeUpdatedMenu($id){

        $data = request()->validate([
            'title' => 'required',
            'desc' => 'required',
            'price' => 'required',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('menu', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();

            $data['image'] = $imagePath;
        }
        
        Menu::find($id)->update($data);

        return redirect('/menu');
    }
}
