<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view ('products.index')->with('products', $products);
    }
 
    
    public function create()
    {
        return view('products.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Product::create($input);
        return redirect('product')->with('flash_message', 'Product Addedd!');  
    }
 
    
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('products', $product);
    }
 
    
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('products', $product);
    }
 
  
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product')->with('flash_message', 'product Updated!');  
    }
 
   
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'Product deleted!');  
    }
}
