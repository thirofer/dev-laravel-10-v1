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

    public function desactivateProduct(Request $request){
        $id = $request->id;
        
        $searchRegister = Product::find($id);
        
        if($request->method() == "POST"){
            dd($request);
            $searchRegister->update();
        }
        
        return response()->json(['success'=>true]);
    }

    public function createProduct(Request $request){

        // MISSING
        // Add Carbon now for Created At date
        // $date = Carbon\Carbon::now();
        if($request->method() == "POST"){
            dd($request);
        }

        return view("pages.products.create");
        
    }

    public function updateProduct(FormRequestProduct $request, $id){
        /*
        if($request->method() == "POST"){
            // Update product data
            $data = $request->all();
            $compopnents = new Components();
            // Change money format to record on database
            //$data['value'] = $components->formatMoney($data['value']);
            Product::update($data);
            
        }
        return view('product.update');
        */
        var_dump($request);
        return response()->json(['success'=>true]);
    }

}
