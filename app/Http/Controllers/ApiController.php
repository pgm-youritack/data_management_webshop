<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Publisher;
use App\Models\Artist;
use App\Models\Author;
use App\Models\Series;

class ApiController extends Controller
{
   public function getManga()
   {
      $manga = Product::select('*')->where('type_id', '=', '1')->get();
      return  response(json_encode($manga))->header('Content-Type', 'application/json');
   }
   public function getSpecificManga($q)
   {
      $manga = Product::select('*')
         ->where('product_name', 'LIKE', '%' . $q . '%')
         ->where('type_id', '=', 1)
         ->get();
      return  response(json_encode($manga))->header('Content-Type', 'application/json');
   }
   public function getLightnovel()
   {
      $lightnovel = Product::select('*')->where('type_id', '=', '2')->get();
      return  response(json_encode($lightnovel))->header('Content-Type', 'application/json');
   }
   public function getSpecificLightnovel($q)
   {
      $lightnovel = Product::select('*')
         ->where('product_name', 'LIKE', '%' . $q . '%')
         ->get();
      return  response(json_encode($lightnovel))->header('Content-Type', 'application/json');
   }
   public function getproducts()
   {
      $products = Product::select('*')->get();
      return  response(json_encode($products));
   }
   public function getSpecificproducts($q)
   {
      $lightnovel = Product::select('*')
         ->where('product_name', 'LIKE', '%' . $q . '%')
         ->get();
      return  response(json_encode($lightnovel));
   }


}
