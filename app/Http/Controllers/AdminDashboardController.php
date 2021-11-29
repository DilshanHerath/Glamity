<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
   public function index(){

       $category = Category::all();

       return view('/admindashbord')->with('Category', $category);
   }

   public function AddCategory(Request $request){

       $validated = $request->validate([
           'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
       ]);

       $category = new Category();

       $category->name = $request->name;

       $name = Carbon::now()->timestamp;
       $extension = $request->file('image')->getClientOriginalExtension();
       $request->image->storeAs('/public' , $name.'.'.$extension);
//       $request->image->storeAs('/public/photos' , $name.'.'.$extension);

       $category->image = ''.$name.'.'.$extension;
//       $category->image = 'photos/'.$name.'.'.$extension;

       $category->save();

       return redirect()->route('/admindashbord');

   }

    public function AddItem(Request $request){

        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $item = new Item();

        $item->name = $request->name;
        $name = Carbon::now()->timestamp;
        $extension = $request->file('image')->getClientOriginalExtension();
        $request->image->storeAs('/public' , $name.'.'.$extension);
//       $request->image->storeAs('/public/photos' , $name.'.'.$extension);

        $item->image = ''.$name.'.'.$extension;

        $item->material = $request->material;
        $item->price = $request->price;
        $item->cat_id = $request->cat_id;


//       $category->image = 'photos/'.$name.'.'.$extension;

        $item->save();
        return redirect()->route('/admindashbord');

    }





    public function getCategory(){

//       $category = Category::all();
////       dd($category);
//       return view('/welcome')->with('Footer', $category);
//       return view('/admindashbord')
   }
}
