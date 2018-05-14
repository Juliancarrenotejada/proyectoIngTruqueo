<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;

use sisVentas\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use sisVentas\Product;
class StoreController extends Controller
{
    public function index()
    {
    	  $products = Product::all();
    //dd($products);
    return view('store.index', compact('products'));
    }

    public function show($slug)
    {
    	$product = Product::where('slug',$slug)->first();
    	//dd($product);

    	return view('store.show', compact('product'));
    }
}
?>