<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Author extends Model
{
    protected $table='authors';
    protected $id='';
    public static function getAuthorFromManga(){
        return DB::table('authors')
         ->join('products','products.author_id','=','authors.id')
         ->select('authors.*')
         ->where("products.type_id","=",1)
         ->distinct()->get();
     }
     public static function getAuthorFromLightnovel(){
        return DB::table('authors')
         ->join('products','products.author_id','=','authors.id')
         ->select('authors.*')
         ->where("products.type_id","=",2)
         ->distinct()->get();
      }
}