<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $randomManga = Product::inRandomOrder()->limit(3)->where('type_id', 1)->get();
      $randomLightnovel = Product::inRandomOrder()->limit(3)->where('type_id', 2)->get();
      return view('home', [
        'randomManga'=>$randomManga,
        'randomLightnovel'=>$randomLightnovel
    ]); 
    }
}
