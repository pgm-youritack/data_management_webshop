<div class="filter">
    <div class="filter__head">
        <img class="filter__icon" src='{{ asset('storage/images/icons/filter.svg') }}'alt="shopping cart icon">
        filters
    </div>
    <form method="GET">


        <div class="price__range">
            <label>Price</label>
            <div class="price__ranges"> <label for="">
                    €<input type="text" name="minimum" placeholder="{{ $min }}">
                </label>
                <p>to</p>
                <label for="">
                    €<input type="text" name="maximum" placeholder="{{ $max }}">
                </label>
            </div>

        </div>
        <div class="dropdown">
            <label for="categorie">categorie</label>
            <select name="categorie" id="categorie">
                <option value="0">select a categorie</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <label for="publisher">Publisher</label>
            <select name="publisher" id="publishers">
                <option value="0">select a publisher</option>
                @foreach ($publishers as $publisher)
                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <label for="series">Series</label>
            <select name="series" id="series">
                <option value="0">select a Series</option>
                @foreach ($series as $serie)
                    <option value="{{ $serie->id }}">{{ $serie->series_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <label for="authors">author(story and/or art)</label>
            <select name="author" id="authors">
                <option value="0">select an Author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->first_name }} {{ $author->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <label for="artists">artist(art)</label>

            <select name="artists" id="artists">
                <option value="0">select an Artist</option>
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->first_name }} {{ $artist->last_name }}</option>
                @endforeach
            </select>
        </div>
        <button class="button__filter" type="submit">Apply Filters</button>
        <a href="/manga">filter Reset</a>
    </form>
</div>
