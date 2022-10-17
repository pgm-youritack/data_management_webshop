@extends('layouts.dashboard')
@section('title', 'new product tag')
@section('content')
    <h1 class="newTagproduct__title">Adding new Tags</h1>
    @if ($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif

    <form method="POST" class="newTagProductForm">
        @csrf
        <h2 newTagProductForm__title>adding a new categorie</h2>
        <label class="newTagProductForm__label">
            categorie:
            <input class="newTagProductForm__input" type="text" required name="categorie">
        </label>
        <button class="newTagProductForm__button" type="submit" name="newCategorie">add
            categorie</button>
    </form>
    <form method="POST" class="newTagProductForm">
        @csrf
        <h2 newTagProductForm__title>adding a new series</h2>
        <label class="newTagProductForm__label">
            series:
            <input class="newTagProductForm__input" type="text" required name="series_name">
        </label>
        <button class="newTagProductForm__button" type="submit" name="newSeries">add series</button>
    </form>

    <form method="POST" class="newTagProductForm">
        @csrf
        <h2 newTagProductForm__title>adding a new publisher</h2>
        <label class="newTagProductForm__label">
            publisher:
            <input class="newTagProductForm__input" type="text" required name="name"></label>
        <button class="newTagProductForm__button" class="newTagProductForm__button" type="submit" name="newPublisher">add
            publisher</button>
    </form>
    <form method="POST" class="newTagProductForm">
        @csrf
        <h2 newTagProductForm__title>adding a new author</h2>
        <label class="newTagProductForm__label">
            first name:
            <input class="newTagProductForm__input" type="text" required name="first_name">
            <label class="newTagProductForm__label">
                last name:
                <input class="newTagProductForm__input" type="text" name="last_name"
                    placeholder="empty if no name"></label>
            <button class="newTagProductForm__button" type="submit" name="newAuthor">add author</button>
    </form>
    <form method="POST" class="newTagProductForm">
        @csrf
        <h2 newTagProductForm__title>adding a new artist</h2>
        <label class="newTagProductForm__label">
            first name:
            <input class="newTagProductForm__input" type="text" required name="first_name">
            <label class="newTagProductForm__label">
                last name:
                <input class="newTagProductForm__input" type="text" name="last_name"
                    placeholder="empty if no name"></label>
            <button class="newTagProductForm__button" type="submit" name="newArtist">add artist</button>
    </form>


@endsection
