<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Publisher extends Model
{
    protected $table='publishers';
    protected $id='';

    public static function getPublisherFromManga(){
       return DB::table('publishers')
        ->join('products','products.publisher_id','=','publishers.id')
        ->select('publishers.id','publishers.name')
        ->where("products.type_id","=",1)
        ->distinct()->get();
    }
    public static function getPublisherFromLightnovel(){
        return DB::table('publishers')
         ->join('products','products.publisher_id','=','publishers.id')
         ->select('publishers.id','publishers.name')
         ->where("products.type_id","=",2)
         ->distinct()->get();
     }
}