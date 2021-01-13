<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;
use App\Enums\CategoryType;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getData(Request $request) {
        $products = (new Product)->newQuery();
        //has(ex:type)->request, not allways coresponds with the name of the column
        if ($request->has('type') && !is_null($request->type)) {
            $products->type(CatalogType::getValue($request->type));
            $products = $products->get();
        }
        //  $view = view('admin.users.data', ['users' => $users])->render();

        // return $view;
        
        return view('web.data')->with(compact('products'));

    }
    public function index(Request $request)
    {
        $products = Product::all();
        $categories = Category::all();
        $products = (new Product)->newQuery();
        //has(ex:type)->request, not allways coresponds with the name of the column
        if ($request->has('type') && !is_null($request->type)) {
            $products->type(CategoryType::getValue($request->type));
            $products = $products->get();
        }

               
        return view('web.products', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
