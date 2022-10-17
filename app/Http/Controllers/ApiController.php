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
   public function getManga(){
    $manga = Product::select('*')->where('type_id','=','1')->get();
    return json_encode($manga);

   }
   public function getLightnovel(){
    $lightnovel = Product::select('*')->where('type_id','=','2')->get();
    return json_encode($lightnovel);

   }
}
