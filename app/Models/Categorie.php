<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorie extends Model
{
    protected $table = 'categories';
    protected $id = '';
    public function categories()
    {
        return $this->belongsToMany(products::class);
    }
    public static function getCategorieFromManga()
    {
        return DB::table('categories')
            ->select('categories.id', 'categories.categorie')
            ->join('categorie_product', 'categories.id', '=', 'categorie_product.categorie_id')
            ->join('products', 'categorie_product.product_id', '=', 'products.id')
            ->where("products.type_id", "=", 1)
            ->distinct()->get();
    }
    public static function getCategorieFromLightnovel()
    {
        return DB::table('categories')
            ->select('categories.id', 'categories.categorie')
            ->join('categorie_product', 'categories.id', '=', 'categorie_product.categorie_id')
            ->join('products', 'categorie_product.product_id', '=', 'products.id')
            ->where("products.type_id", "=", 2)
            ->distinct()->get();
    }
}
