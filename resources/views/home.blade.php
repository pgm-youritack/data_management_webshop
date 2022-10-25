<!-- resources/views/course/detail.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Manga's</h1>
    <ul>
        <ul class="list-group items list-group-horizontal-sm">
            @foreach ($randomManga as $manga)
                <li class="item">
                    <a href="/detail/{{ $manga->id }}" class="item__link">
                        <img class="item__image" src='{{ asset('storage/images/' . $manga->image) }}' alt=""
                            srcset="">
                        <div class="item__info">
                            <h1 class="item__title">{{ $manga->product_name }}</h1>
                            <p class="item__info-paraph">{{ $manga->publisher->name }}</p>
                            <p>
                                @foreach ($manga->categories as $categorie)
                                    {{ $categorie->categorie }}
                                @endforeach
                            </p>
                            <p class="item__info-paraph">{{ $manga->price }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>

        <h1>light novels</h1>
        <ul class="list-group items list-group-horizontal-sm">
            @foreach ($randomLightnovel as $lightnovel)
                <li class="item">
                    <a href="/detail/{{ $lightnovel->id }}"> <img class="item__image "
                            src='{{ asset('storage/images/' . $lightnovel->image) }}' alt="" srcset="">
                        <div class="item__info">
                            <h1 class="item__title">{{ $lightnovel->product_name }}</h1>
                            <p class="item__info-paraph">{{ $lightnovel->publisher->name }}</p>
                            <p>
                                @foreach ($lightnovel->categories as $categorie)
                                    {{ $categorie->categorie }}
                                @endforeach
                            </p>
                            <p class="item__info-paraph">{{ $lightnovel->price }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>


    @endsection
