<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CategoryController extends Controller
{
    public function GetProducts($id){
        $products = Product::get()->where('category_id', $id);
        $categories = Category::all();
        return view('category.index',['products' =>$products, 'categories' =>$categories]);
    }
}
