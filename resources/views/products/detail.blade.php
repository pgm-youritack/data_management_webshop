<!-- resources/views/course/detail.blade.php -->

@extends('layouts.app')

@section('title', $product->product_name)

@section('content')

    <div class="detail__info-main"><img class="item__image" src='{{ asset('storage/images/' . $product->image) }}'
            alt="">
        <div class="detail__info-main-description">
            <h1>{{ $product->product_name }}</h1>
            <div class="buy__section">
                <div class="buy__section-stock">
                    <p>Stock:</p>
                    <p>
                        @if ($product->stock === 1)
                            In stock
                        @else
                            out of stock
                        @endif
                    </p>
                </div>
                <div class="buy__section-buying">
                <p class="buy__section-price">{{$product->price}}</p>
                <button class="button__add">
                <img class="cart__icon" src='{{ asset('storage/images/icons/shopping cart.svg')}}'alt="shopping cart icon"> Add To Cart
                </button>
                </div>
            </div>

            <p class="detail__info-main-itemDescription">{!! nl2br($product->product_description) !!}</p>
        </div>
    </div>
@endsection
