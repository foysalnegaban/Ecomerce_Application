<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productManager extends Controller
{
    function index(){
        $products = products::paginate(4);
        return view('includes.products',compact('products'));
    }

    function details($slug){
        $products = products::where('slug',$slug)->first();
        return view('details', compact('products'));
    }  
}
