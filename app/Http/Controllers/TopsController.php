<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TopsController extends Controller
{
    public function index(){


        $Tops = Item::all();
        return view('/tops')->with('Tops', $Tops);
    }
}
