<!-- resources/views/course/detail.blade.php -->

@extends('layouts.app')

@section('title', $product->product_name)

@section('content')

    <div class="row m-3">
        <div class="col-md-3"><img class="img-fluid " style="max-width: 100% height:auto"
                src='{{ asset('storage/images/' . $product->image) }}' alt="">
        </div>
        <div class="detail__info-main-description col-md-9">
            <h1>{{ $product->product_name }}</h1>

            <div class="container">
                <div class="row" style="width:300px">
                    <p class="col">Stock</p>
                    <p class="col">
                        @if ($product->stock !== 0)
                            {{ $product->stock }}
                        @else
                            Out of Stock
                        @endif
                    </p>
                    <div class="w-100"></div>
                    <p class="col fw-bold">€ {{ $product->price }}</p>
                    <form method="POST" class="col"><button type="submit"
                            class=" btn btn-outline-secondary text-nowrap btn-light rounded-pill"><i
                                class="bi bi-cart3"></i> Add to cart</button></form>

                </div>
            </div>

            <p class="detail__info-main-itemDescription">{!! nl2br($product->product_description) !!}</p>
        </div>
        <div class="row m-3">
            <div class="col-md-6" style="width: 400px">
                <h1 class="h2 fw-bold">Product Details</h1>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between px-2 py-sm-0">
                        <p class="">Categories:</p>
                        <p class="">
                            @foreach ($product->categories as $categorie)
                            {{$categorie->categorie}}
                            @endforeach
                        </p>
                    </li>
                </ul>
            </div>

        </div>
    </div>

@endsection
