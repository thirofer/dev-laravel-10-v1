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
        "created_at",
        "updated_at"
    ];
    public function getProductsSearchIndex(string $searchProduct = ''){
        $product = $this->where(function($query) use ($searchProduct){
            if($searchProduct){
                $query->where("name", $searchProduct);
                $query->orWhere("name", "LIKE", "%{$searchProduct}%");
            }
        })->get();
        return $product;
    }
}
