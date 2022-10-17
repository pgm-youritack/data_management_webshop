<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\Publisher;
use App\Models\Artist;
use App\Models\Author;
use App\Models\Series;

class ProductController extends Controller
{
    public function index()
    {
        return view('home', []);
    }

    public function detail($id)
    {
        //zoeken via het maken van een instantie van de moel
        // $courseModel = new Course();
        // $course = $courseModel->find($id);

        // zoeken via een static method zonder een instantie
        $product = Product::find($id);

        return view('products.detail', [
            'product' => $product,

        ]);
    }
    public function mangalist()
    {
        $products = Product::where('type_id', 1)->get();
        $publishers = Publisher::getPublisherFromManga();
        $categories = Categorie::getCategorieFromManga();
        $artists = Artist::getArtistFromManga();
        $authors = Author::getAuthorFromManga();
        $series = Series::getSeriesFromManga();
        $product= Product::find(1);


        return view('products.mangalist', [
            'products' => $products,
            'publishers' => $publishers,
            'categories' => $categories,
            'series' => $series,
            'artists' => $artists,
            'authors'=>$authors
        ]);
    }
    public function lightnovellist()
    {
        $products = Product::where('type_id', 2)->get();
        $publishers = Publisher::getPublisherFromLightnovel();
        $categories = Categorie::getCategorieFromLightnovel();
        $series = Series::getSeriesFromLightnovel();
        $artists = Artist::getArtistFromLightnovel();
        $authors = Author::getAuthorFromLightnovel();
        return view('products.lightnovellist', [
            'products' => $products,
            'publishers' => $publishers,
            'categories' => $categories,
            'series' => $series,
            'artists'=>$artists,
            'authors'=>$authors
        ]);
    }
}
