<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\foodsrequest;
use App\Models\foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class FoodsController extends Controller
{
    public function addfoodsview(){
        $foodsdata = DB::table('foods')->limit(1)->latest()->get();
        return view('adminpanel.add', compact('foodsdata'));
    }
    public function addfoods(foodsrequest $request){
        $food = new foods();

        $food->name = $request->f_title;
        $food->category = $request->f_category;
        $food->description = $request->f_descreption;
        $food->price = $request->f_price;

        $name = $request->file('f_photo')->getClientOriginalName();
        $request->file('f_photo')->storeAs('/', $name, 'foodsfiles');
        $food->photo = $name;

        $food-> save();

        return redirect()->route("addfoodsview");
    }

    public function showfoods() {
        $fooddata = DB::table('foods')->get();
        return view('adminpanel.viewfood',compact('fooddata'));
    }
    public function showmenu() {
        $fooddata = DB::table('foods')->get();
        return view('menu',compact('fooddata'));
    }
    public function breakfast() {
        $fooddata = DB::table('foods')->where('category', 'breakfast')->get();
        return view('menu',compact('fooddata'));
    }
    public function maindishes() {
        $fooddata = DB::table('foods')->where('category', 'main dishes')->get();
        return view('menu',compact('fooddata'));
    }
    public function drinks() {
        $fooddata = DB::table('foods')->where('category', 'drinks')->get();
        return view('menu',compact('fooddata'));
    }
    public function dessert() {
        $fooddata = DB::table('foods')->where('category', 'dessert')->get();
        return view('menu',compact('fooddata'));
    }
    public function update($id){
        $prodata = DB::table('foods')->where('id', $id)->first();
        return view('adminpanel.editfood', compact('prodata'));
    }
    public function updatefoods(Request $request,$id){
        DB::table('foods')->where('id', $id)->update([
            'name' => $request->f_title,
            'category' => $request->f_category,
            'description' => $request->f_descreption,
            'price' => $request->f_price
            ]);

        if(!empty($request->f_photo)){
            // $fi_photo = DB::table('foods')->where('id', $id)->get();
            // $fi_getph = $fi_photo[0]->f_photo;
            $name = $request->file('f_photo')->getClientOriginalName();
            $request->file('f_photo')->storeAs('/', $name, 'foodsfiles');
            DB::table('foods')->where('id', $id)->update([
                'photo' => $name
            ]);
        }

        return redirect()->route('showfoods');
    }
    public function delete($id){
        foods::find($id)->delete();
        return redirect()->route('showfoods');
    }
    public function deleteall(){
        DB::table('foods')->truncate();
        return redirect()->route('showfoods');
    }
}