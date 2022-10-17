<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Series extends Model
{
    protected $table='series';
    protected $id='';

    public static function getSeriesFromManga(){
        return DB::table('series')
         ->join('products','products.series_id','=','series.id')
         ->select('series.*')
         ->where("products.type_id","=",1)
         ->distinct()->get();
     }
     public static function getSeriesFromLightnovel(){
        return DB::table('series')
         ->join('products','products.series_id','=','series.id')
         ->select('series.*')
         ->where("products.type_id","=",2)
         ->distinct()->get();
      }
}