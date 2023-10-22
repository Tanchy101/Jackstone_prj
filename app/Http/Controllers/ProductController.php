<?php

namespace App\Http\Controllers;
use App\Models\product;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function display(){
        $products = Product::all();
        return view('Products.read', ['products' => $products]);

    }
    public function create(){
        return view('Products.create');


    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'qty'=> 'required|numeric',
            'price'=> 'required|decimal:2',
            'description' => 'nullable'
        ]);
        
        $newProduct = Product::create($data);

        return redirect(route('product.read'));


    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'qty'=> 'required|numeric',
            'price'=> 'required|decimal:2',
            'description' => 'nullable'
        ]);

        $product -> update($data);

        return redirect(route('product.read')) -> with('success', 'Product Updated Succesfully ');
    }

}
