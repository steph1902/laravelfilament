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

    public function hotItems()
    {
        $products = Product::where('status', 1)->where('hot_items_flag', 1)->get();
        // dd($products);
        return view('allproducts', compact('products'));
    }
    public function newCollections()
    {
        $products = Product::where('status', 1)->where('new_collections_flag', 1)->get();
        return view('allproducts', compact('products'));
    }
    public function tops()
    {
        $products = Product::where('status', 1)->where('category', 'tops')->get();
        return view('allproducts', compact('products'));
    }
    public function pants()
    {
        $products = Product::where('status', 1)->where('category', 'pants')->get();
        return view('allproducts', compact('products'));
    }
    public function dresses()
    {
        $products = Product::where('status', 1)->where('category', 'dress')->get();
        return view('allproducts', compact('products'));
    }
    public function skirts()
    {
        $products = Product::where('status', 1)->where('category', 'skirts')->get();
        return view('allproducts', compact('products'));
    }


}
