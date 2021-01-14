<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;
use App\Enums\CategoryType;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        if ( $request->type && in_array($request->type, CategoryType::getKeys()) ) {
            $products = (new Product)->newQuery();
            $products->type(CategoryType::getValue($request->type));
            $products = $products->get();
        }
        return view('web.products', compact('products'));
    }
}
