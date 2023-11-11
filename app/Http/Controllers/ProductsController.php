<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index(){
        $findProducts = Products::where('name', '!=', 'Notebook Lenovo')->get();
        print($findProducts);
        return 'products';
    }
    //
}
