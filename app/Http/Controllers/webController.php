<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function index()
    {
        return view('website.ecommerce.index');
    }
    public function products()
    {
        return view('website.ecommerce.product.products');
    }
    public function details()
    {
        return view('website.ecommerce.product_details');
    }
    public function cart()
    {
        return view('website.ecommerce.cart');
    }
}
