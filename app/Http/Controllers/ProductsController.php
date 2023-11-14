<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function __construct(Products $product){
        $this->product = $product;
    }

    public function index(Request $request){
        $productNeeded = $request->productNeeded;
        $findProducts = $this->product->getProductsSearchIndex(searchProduct: $productNeeded ?? '');
            
        return view('pages.products.pagination', compact('findProducts'));
    }

}
