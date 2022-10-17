<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Product extends Model
{
    protected $table='products';
    protected $id='';
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function artist(){
        return $this->belongsTo(artist::class);
    }
    public function categories(){
        return $this->belongsToMany(Categorie::class);
    }
    public function series(){
        return $this->belongsTo(Series::class);
    }
}
