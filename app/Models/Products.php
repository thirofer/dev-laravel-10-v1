<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "value",
        "quantity",
        "active",
    ];
    public function getProductsSearchIndex(string $searchProduct = ''){
        $product = $this->where(function($query) use ($searchProduct){
            if($searchProduct){
                $query->where('name', $searchProduct);
                $query->orWhere('nome', 'LIKE', "%{$searchProduct}");
            }
        })->get();
        return $product;
    }
}
