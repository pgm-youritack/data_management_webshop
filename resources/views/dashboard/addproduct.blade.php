@extends('layouts.dashboard')
@section('title', 'new product')
@section('content')

    <form class="updateProductForm" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="product_name">Product Name:</label>
            <input type="text" name="product_name" value="" class="updateProductForm__input-input" id="product_name">
        </div>
        <div class="updateProductForm__input-textarea">
            <label class="updateProductForm__input-label" for="product_description">Product description:</label>
            <textarea type="textarea" name="product_description" class="updateProductForm__input-input" rows="10"
                cols="100" id="product_description"></textarea>
        </div>
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="pages">Pages:</label>
            <input type="text" name="pages" value="" class="updateProductForm__input-input" id="pages">
        </div>
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="price">Price:</label>
            <input type="text" name="price" value="" class="updateProductForm__input-input" id="price">
        </div>
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="price">product type:</label>
            <select name="type_id" id="series">
                @foreach ($Types as $type)
                    <option value="{{ $type->id }}">{{ $type->product_type }}</option>
                @endforeach
            </select>
        </div>
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="price">Series:</label>
            <select name="series_id" id="series">
                @foreach ($Series as $series)
                    <option value="{{ $series->id }}">{{ $series->series_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="price">Publisher:</label>
            <select name="publisher_id" id="series">
                @foreach ($Publishers as $publisher)
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="price">Authors:</label>
            <select name="author_id" id="series">
                @foreach ($Authors as $author)
                    <option value="{{ $author->id }}">{{ $author->first_name }}
                        {{ $author->last_name ? $author->last_name : '' }}</option>
                @endforeach
            </select>
        </div>
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="author">Artists:</label>
            <select name="artist_id" id="author">
                <option value="0">No artist</option>
                @foreach ($Artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->first_name }}
                        {{ $artist->last_name ? $artist->last_name : '' }}</option>
                @endforeach
            </select>
        </div>
        <div class="updateProductForm__input">
            <label class="updateProductForm__input-label" for="price">Categories:</label>
            <div class="checkboxes">
                @foreach ($Categories as $categorie)
                    <label><input type="checkbox" name="categories[]" value="{{ $categorie->id }}">
                        {{ $categorie->categorie}}
                    </label>
                @endforeach
            </div>
                <div class="updateProductForm__input">
                    <label class="updateProductForm__input-label" for="image">Product image:</label>
                    <input type="file" name="image" id="image">
                </div>
                <input type="submit" value="gsg">
    </form>

@endsection
