<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return view('products.index')
            ->with('products', $products);
    }

    public function create(){
        return view('products.create');
    }


    public function store(Request $request)
    {
        $product = new Product;

        $product->product_price = $request->price;
        $product->product_name = $request->name;

        $product->save();

        return redirect()->route('product.index');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show')->with('product', $product);
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->product_price = $request->price;
        $product->product_name = $request->name;

        $product->save();

        return redirect()->route('product.index');
    }


    public function edit($id)
    {
        $product = Product::where('id', $id)->first();

        return view('products.edit')
            ->with('product', $product);
    }


    public function destroy($id)
    {
        $product = Product::find($id)
            ->delete();

        return redirect()->route('product.index');
    }

}
