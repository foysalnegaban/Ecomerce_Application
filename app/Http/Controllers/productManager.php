<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\cart;
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

    function addToCart($id){
    $cart = new cart();
    $cart->user_id = auth()->user()->id;
    $cart->product_id = $id;
    if($cart->save()){
        return redirect()->back()->with('success','Successfully add to cart!');
    }
    return redirect()->back()->with('error','Something went wrong');
    }
}
