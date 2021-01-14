<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductStoreRequest;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        
        return view('manage.products.index', compact('products'));
    }

    public function create()
    {
        return view('manage.products.create');
    }

    public function store(ProductStoreRequest $request)
    {
        if ($request->hasFile('image')) {
            
            $imageName = str_random(20);
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $newFullFileName = $imageName . '.' . $imageExtension;
            
            Storage::disk('public')->putFileAs('/img', $request->file('image'), $newFullFileName);    
        }

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'details'=> $request->details,
            'image'=> $newFullFileName,
            'type' => $request->type,
        ]);
        return redirect()->route('manage.products.show', $product->id);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('manage.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('manage.products.edit', compact('product'));
    }

    public function update(ProductStoreRequest $request, $id)
    {
        $product = Product::find($id);
        $path = $request->file('image');

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->details = $request->input('details');
        
        if ($request -> hasFile('image')) { 
            $imageName = str_random(20);
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $newFullFileName = $imageName . '.' . $imageExtension;

            if(!empty($request->image)){
                Storage::disk('local')->delete('img/' . $product->image);
            } 
           
            Storage::disk('local')->putFileAs('/img', $request->file('image'), $newFullFileName);
            $product->image = $newFullFileName;
         }

        $product->save();

        return redirect()->route('manage.products.show', $product->id);
    }

   
}
