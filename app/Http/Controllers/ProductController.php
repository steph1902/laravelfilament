<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::where('status', 1)->get();        
        return view('allproducts', compact('products'));
    }
    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('productdetails', compact('product'));
    }
    public function aboutUs()
    {
        return view('aboutus');
    }
    public function blog()
    {
        return view('blog');
    }
    public function faq()
    {
        return view('faq');
    }
}
