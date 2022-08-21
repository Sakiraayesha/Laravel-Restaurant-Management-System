<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\Models\Chef;

class ChefController extends Controller
{
    public function chefs(){
        $chefs = Chef::all();
        return view("admin.chefs", compact("chefs"));
    }

    public function addChef(){
        return view("admin.addchef");
    }

    public function storeChef(){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'rank' => 'required',
            'twitter' => 'url',
            'instagram' => 'url',
            'image' => ['required', 'image']
        ]);

        if(request('facebook')){
            $data['facebook'] = request('facebook');
        }

        $imagePath = request('image')->store('chefs', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();

        $data['image'] = $imagePath;
        
        Chef::create($data);

        return redirect('/chefs');
    }

    public function deleteChef($id){
        Chef::find($id)->delete();
        return redirect('/chefs');
    }

    public function updateChef($id){
        $chef = Chef::find($id);
        return view("admin.addchef", compact("chef"));
    }

    public function storeUpdatedChef($id){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'rank' => 'required',
            'twitter' => 'url',
            'instagram' => 'url',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('menu', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();

            $data['image'] = $imagePath;
        }

        if(request('facebook')){
            $data['facebook'] = request('facebook');
        }

        Chef::find($id)->update($data);

        return redirect('/chefs');
    }
}
