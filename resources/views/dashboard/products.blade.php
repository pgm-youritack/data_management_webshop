@extends('layouts.dashboard')
@section('title', 'products')
@section('content')

    <ul class="products">
        @foreach ($products as $product)
            <li class="product">
                <img class="product__image" src='{{ asset('storage/images/' . $product->image) }}' alt="" srcset="">
                <p class="product__title">{{$product->product_name}}</p>
                <a href="./products/{{$product->id}}">update</a>
            </li>
        @endforeach
    </ul>

@endsection
