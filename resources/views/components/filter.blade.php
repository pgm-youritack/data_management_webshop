<div class="filter">
    <div class="filter__head">
        <img class="filter__icon" src='{{ asset('storage/images/icons/filter.svg')}}'alt="shopping cart icon">
        filters
    </div>
    <form >
        <div class="dropdown">
            <label for="categorie">categorie</label>
            <select name="categories" id="categorie">
                <option value="">select a categorie</option>
                @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <label for="publisher">Publisher</label>
            <select name="categorie" id="publishers">
                <option value="">select a publisher</option>
                @foreach ($publishers as $publisher)
                    <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <label for="series">Series</label>
            <option value="">select a Series</option>
            <select name="series" id="series">
                @foreach ($series as $serie)
                    <option value="{{$serie->id}}">{{$serie->series_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <label for="authors">author(story and/or art)</label>
            <option value="">select a Author</option>
            <select name="authors" id="authors">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->first_name}} {{$author->last_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="dropdown">
            <label for="artists">artist(art)</label>
            
            <select name="artists" id="artists">
                <option value="">select a artist</option>
                @foreach ($artists as $artist)
                    <option value="{{$artist->id}}">{{$artist->first_name}} {{$artist->last_name}}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>