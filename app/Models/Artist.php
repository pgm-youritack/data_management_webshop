<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Artist extends Model
{
    protected $table='artists';
    protected $id='';

    public static function getArtistFromManga(){
        return DB::table('artists')
         ->join('products','products.artist_id','=','artists.id')
         ->select('artists.*')
         ->where("products.type_id","=",1)
         ->distinct()->get();
     }
     public static function getArtistFromLightnovel(){
        return DB::table('artists')
         ->join('products','products.artist_id','=','artists.id')
         ->select('artists.*')
         ->where("products.type_id","=",2)
         ->distinct()->get();
      }
}