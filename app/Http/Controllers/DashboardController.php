<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Author;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Publisher;
use App\Models\Series;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;

class dashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard/products', [
            'products' => $products,
        ]);
    }
    public function addProduct()
    {
        $publishers = Publisher::all();
        $series = Series::all();
        $categories = Categorie::all();
        $authors = Author::all();
        $artists = Artist::all();
        $types = Type::all();
        return view('dashboard/addproduct', [
            'Publishers' => $publishers,
            'Series' => $series,
            'Categories' => $categories,
            'Authors' => $authors,
            'Artists' => $artists,
            'Types' => $types,
        ]);
    }
    public function changeProduct($id)
    {
        $product = Product::find($id);

        return view('dashboard.updateProduct', [
            'product' => $product,

        ]);
    }
    public function saveProduct(Request $request)
    {
        $product = new Product();
        $image = $request->file('image');
        $fileName = $request->input('product_name') . '.' . $image->getClientOriginalExtension();
        $description =  nl2br($request->input('product_description'));

        $product->product_name = $request->input('product_name');
        $product->product_description = $description;
        $product->pages = intval($request->input('pages'));
        $product->price = intval($request->input('price'));
        $product->series_id = $request->input('series_id');
        $product->author_id = $request->input('author_id');
        $product->publisher_id = $request->input('publisher_id');
        $product->image = $fileName;
        $product->type_id = $request->input('type_id');
        if ($request->input('artist_id') != 0) {
            $product->artist_id = $request->input('artist_id');
        }

        $product->save();
        $product->categories()->sync($request->input('categories'));

        Storage::putFileAs('public/images', $image, $fileName);
        return Redirect::back();
    }
    public function productTags()
    {
        return view('dashboard.addProductTag', []);
    }
    public function saveProductTag(Request $request)
    {
        if ($request->has("newCategorie")) {
            $errors = new MessageBag();
            $newItem = $request->input('categorie');
            $validation = Categorie::where('categorie', '=',$newItem )->first();
            if ($validation === null) {
                $categorie = new Categorie();
                $categorie->categorie = $newItem;
                $categorie->save();
                return Redirect::back();
            } else {
                $errors->add('409_conflict',"the record for categorie $newItem already exists");
                return Redirect::back()->withErrors($errors);
            }
        }
        if ($request->has("newSeries")) {
            $errors = new MessageBag();
            $newSeries = $request->input('series_name');
            $validation = Series::where('series_name', '=',$newSeries )->first();
            if ($validation === null) {
                $series = new Series();
                $series->series_name = $newSeries;
                $series->save();
                return Redirect::back();
            } else {
                $errors->add('409_conflict',"the record for series: $newSeries already exists");
                return Redirect::back()->withErrors($errors);
            }
        }
        if ($request->has("newPublisher")) {
            $errors = new MessageBag();
            $newItem = $request->input('name');
            $validation = Publisher::where('name', '=',$newItem )->first();
            if ($validation === null) {
                $publisher = new Publisher();
                $publisher->name = $newItem;
                $publisher->save();
                return Redirect::back();
            } else {
                $errors->add('409_conflict',"the record for series: $newItem already exists");
                return Redirect::back()->withErrors($errors);
            }
        }
        if ($request->has("newAuthor")) {
            $errors = new MessageBag();
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $validation = Author::where('first_name', '=',$first_name )->first();
            if ($validation === null) {
                $author = new Author();
                $author->first_name = $first_name;
                if($last_name!==""or$last_name!==null){
                    $author->last_name=$last_name;
                }
                $author->save();
                return Redirect::back();
            } else {
                $errors->add('409_conflict',"the record for author: $first_name $last_name already exists");
                return Redirect::back()->withErrors($errors);
            }
        }
        if ($request->has("newArtist")) {
            $errors = new MessageBag();
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $validation = Artist::where('first_name', '=',$first_name )->first();
            if ($validation === null) {
                $artist = new Artist();
                $artist->first_name = $first_name;
                if($last_name!==""or$last_name!==null){
                    $artist->last_name=$last_name;
                }
                $artist->save();
                return Redirect::back();
            } else {
                $errors->add('409_conflict',"the record for author: $first_name $last_name already exists");
                return Redirect::back()->withErrors($errors);
            }
        }



    }
}
