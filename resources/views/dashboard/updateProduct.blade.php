@extends('layouts.dashboard')
@section('title', $product->product_name)
@section('content')

<form class="updateProductForm" action="" method="post">
    <input type="hidden" value="{{$product->id}}">
    <div class="updateProductForm__input">
        <label class="updateProductForm__input-label" for="product_name">Product Name:</label>
        <input type="text" name="product_name" value="{{$product->product_name}}" class="updateProductForm__input-input" id="product_name">
    </div>
    <div class="updateProductForm__input-textarea">
        <label class="updateProductForm__input-label" for="product_description">Product description:</label>
        <textarea type="textarea" name="product_description" class="updateProductForm__input-input" rows="10" cols="100" id="product_description">{{$product->product_description}}</textarea>
    </div>
    <div class="updateProductForm__input">
        <label class="updateProductForm__input-label" for="publisher">Publisher:</label>
        <input type="text" name="publisher" value="{{$product->publisher->name}}" class="updateProductForm__input-input" id="publisher">
    </div>
    <div class="updateProductForm__input">
        <label class="updateProductForm__input-label" for="author">Author:</label>
        <input type="text" name="author" value="{{$product->author->first_name}} {{$product->author->last_name}}" class="updateProductForm__input-input" id="author">
    </div>
    <div class="updateProductForm__input">
        <label class="updateProductForm__input-label" for="artist">Artist:</label>
        <input type="text" name="artist" value="{{$product->artist?$product->artist->first_name:""}} {{$product->artist?$product->artist->last_name:""}}" class="updateProductForm__input-input" id="artist">
    </div>
    <div class="updateProductForm__input">
        <label class="updateProductForm__input-label" for="series">Series:</label>
        <input type="text" name="series" value="{{$product->series->series_name}}" class="updateProductForm__input-input" id="series">
    </div>
    <div class="updateProductForm__input">
        <label class="updateProductForm__input-label" for="pages">Pages:</label>
        <input type="text" name="pages" value="{{$product->pages}}" class="updateProductForm__input-input" id="pages">
    </div>
    <div class="updateProductForm__input">
        <label class="updateProductForm__input-label" for="pages">Price:</label>
        <input type="text" name="price" value="{{$product->price}}" class="updateProductForm__input-input" id="price">
    </div>
</form>

@endsection
