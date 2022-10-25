@extends('layouts.dashboard')
@section('title', 'products')
@section('content')

    <div class="searchProducts">
        <label class="searchProducts__label">
            Product:<input type="text" name="" id="search_product" class="searchProduct__label">
        </label>
    </div>
    <ul class="products" id="product">
        @foreach ($products as $product)
            <li class="product">
                <img class="product__image" src='{{ asset('storage/images/' . $product->image) }}' alt=""
                    srcset="">
                <p class="product__title">{{ $product->product_name }}</p>
                <a href="./products/{{ $product->id }}">update</a>
            </li>
        @endforeach
    </ul>
    
    <script>
        let $search_product = document.getElementById('search_product');
        let $checkboxes = document.getElementById('product');
        
        $search_product.addEventListener('keyup', (evt) => {
            var search_string = $search_product.value;
            if( search_string.length ) {
                fetch('/api/products/' + search_string)
                    .then((response) => response.json())
                    .then((data) => {
                        $checkboxes.innerHTML = '';
                        data.forEach( ($product) => {
                            $checkboxes.innerHTML +='<li class="product"><img class="product__image" src="/storage/images/'+$product.image+'">'+$product.product_name+'</li>'
                        });
                    });
            }
        });
        </script>

@endsection

