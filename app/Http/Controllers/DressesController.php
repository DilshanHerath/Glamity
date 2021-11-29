<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footer;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DressesController extends Controller
{
   public function index(){


       $Dress = Item::all();
       return view('/dresses')->with('Dress', $Dress);
   }

    public function category_list($id){

//        $Items=Item::all();

        $Footer = Footer::all();

        $Items=DB::table('Items')
            ->where('cat_id', '=', $id)
            ->get();

        $category=DB::table('categories')
            ->where('id', '=', $id)
            ->get();
//        dd($category[0]->name);
        $category_name=isset($category[0]->name)&&!empty($category[0]->name)&&$category[0]->name!=""?$category[0]->name:"";

//dd($Items);
        $value=["Footer"=>$Footer,"Items"=>$Items,"category_name"=>$category_name];
        return view('category_items')->with($value);



    }
}
