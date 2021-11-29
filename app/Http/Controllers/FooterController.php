<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footer;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    public function Footer()
    {

        $Category = Category::all();
        $data = Footer::all();
$value=["Category"=>$Category,"data"=>$data];
//        return view('welcome', compact($Category,$data));

//        return view('welcome')->with('Category', $data);
//        return view('/welcome')->with('Category', $Category);
        return view('welcome')->with($value);
       // return view('welcome', compact(['$Category', '$data']));

    }


    public function getItem(){

        $Item=Item::all();

//        $Item = DB::table('items')->skip(0)->take(6)->get();
//        $Item = Item->$Item->skip(0)->take(4)->get();
        $Category = Category::all();
        $Footer = Footer::all();

        $value=["Category"=>$Category,"Footer"=>$Footer,"Item"=>$Item];
//        return view('/welcome')->with('Item', $Item);
       // return view('welcome', compact(['Category', 'Footer','Item']));
        return view('welcome')->with($value);
    }
}
