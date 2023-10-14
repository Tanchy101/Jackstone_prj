<?php

namespace App\Http\Controllers;
use App\Models\product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('Products.index');
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

        return redirect(route('product.index'));

    }
}
