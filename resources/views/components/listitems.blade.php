@foreach ($products as $product)
    <li class="item">
        <a href="/detail/{{ $product->id }}"> <img class="item__image"
                src='{{ asset('storage/images/' . $product->image) }}' alt="" srcset="">
            <div class="item__info">
                <h1 class="item__title">{{ $product->product_name }}</h1>
                <p class="item__info-paraph">{{ $product->publisher->name }}</p>
                <p>
                    @foreach ($product->categories as $categorie)
                        {{ $categorie->categorie}}
                    @endforeach
                </p>
                <p class="item__info-paraph">{{ $product->price }}</p>
            </div>
        </a>


    </li>
@endforeach
