<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Publisher;
use App\Models\Artist;
use App\Models\Author;
use App\Models\Series;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        return view('home', []);
    }

    public function detail($id)
    {

        $product = Product::find($id);

        $randomProducts = Product::inRandomOrder()->limit(3)->where('type_id', $product->type_id)->whereNot('id',$id)->get();
        return view('products.detail', [
            'product' => $product,
            'randomProducts'=>$randomProducts
        ]);
    }
    public function mangalist(Request $request)
    {
        $filterseries=$request->query('series');
        $filterauthor=$request->query('author');
        $filterpublisher=$request->query('publisher');
        $filterartist=$request->query('artist');
        $filtercategorie=$request->query('categorie');
        $filterminimum=$request->query('minimum');
        $filtermaximum=$request->query('maximum');
        
        $products = Product::where('type_id', 1);
        if($request->query('series')){
            $products->where('series_id',$filterseries);
        }
        if($request->query('author')){
            $products->where('author_id',$filterauthor);
        }
        if($request->query('publisher')){
            $products->where('publisher_id',$filterpublisher);
        }
        if($request->query('artist')){
            $products->where('artist_id',$filterartist);
        }
        if($request->query('categorie')){
            $products->where('categorie_id',$filtercategorie)
            ->join('categorie_product','product_id','=','products.id');
        }
        if($request->query('minimum') && $request->query('maximum')){
            $products->wherebetween('price',[$filterminimum,$filtermaximum]);
        }


        $products = $products->get();
        $publishers = Publisher::getPublisherFromManga();
        $categories = Categorie::getCategorieFromManga();
        $artists = Artist::getArtistFromManga();
        $authors = Author::getAuthorFromManga();
        $series = Series::getSeriesFromManga();
        $max = Product::max('price');
        $min = Product::min('price');
        return view('products.mangalist', [
            'products' => $products,
            'publishers' => $publishers,
            'categories' => $categories,
            'series' => $series,
            'artists' => $artists,
            'authors'=>$authors,
            'min'=>$min,
            'max'=>$max,
        ]);
    }
    public function lightnovellist(Request $request)
    {
        $filterseries=$request->query('series');
        $filterauthor=$request->query('author');
        $filterpublisher=$request->query('publisher');
        $filterartist=$request->query('artist');
        $filtercategorie=$request->query('categorie');
        $filterminimum=$request->query('minimum');
        $filtermaximum=$request->query('maximum');
        
        $products = Product::where('type_id', 2);
        if($request->query('series')){
            $products->where('series_id',$filterseries);
        }
        if($request->query('author')){
            $products->where('author_id',$filterauthor);
        }
        if($request->query('publisher')){
            $products->where('publisher_id',$filterpublisher);
        }
        if($request->query('artist')){
            $products->where('artist_id',$filterartist);
        }
        if($request->query('categorie')){
            $products->where('categorie_id',$filtercategorie)
            ->join('categorie_product','product_id','=','products.id');
        }
        if($request->query('minimum') && $request->query('maximum')){
            $products->wherebetween('price',[$filterminimum,$filtermaximum]);
        }

        $products = $products->get();
        $publishers = Publisher::getPublisherFromLightnovel();
        $categories = Categorie::getCategorieFromLightnovel();
        $series = Series::getSeriesFromLightnovel();
        $artists = Artist::getArtistFromLightnovel();
        $authors = Author::getAuthorFromLightnovel();
        $max = Product::max('price');
        $min = Product::min('price');
        return view('products.lightnovellist', [
            'products' => $products,
            'publishers' => $publishers,
            'categories' => $categories,
            'series' => $series,
            'artists'=>$artists,
            'authors'=>$authors,
            'min'=>$min,
            'max'=>$max,
        ]);
    }
    public function addCart($id,Request $request){

        $product = Product::find($id);
        $product->users()->sync(Auth::id());
        return Redirect::to('/detail/'.$id);
    }
}
