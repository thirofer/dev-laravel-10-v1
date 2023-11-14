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
    public function getProductsSearchIndex(string $productSearch = ''){
        $product = $this->where(function($query) use ($productSearch){
            if($productSearch){
                $query->where('name', $productSearch);
                $query->orWhere('nome', 'LIKE', '%{$productSearch}%');
            }
        })->get();
        return $product;
    }
}
