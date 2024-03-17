<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $product) {
        $this->produto = $product;
    }
    
    public function index(Request $request) 
    {
        // dd($request);
        $findProducts = Product::all();        
        return view("pages.products.paginacao", compact('findProducts'));
    }
    
    public function delete(Request $request) 
    {
        
    }
}
