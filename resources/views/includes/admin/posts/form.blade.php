@if($post->exists)
<form method="POST" action="{{ route("admin.posts.update", $post->id) }}">
    @method("PATCH")
    @else
    <form method="POST" action="{{route("admin.posts.store")}}">
    @endif
    
    @csrf

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" placeholder="Titolo" value="{{$post->title}}">
    </div>

    <div class="form-group">
        <label for="content">Contenuto del post</label>
        <textarea class="form-control  @error("content") is-invalid @enderror" id="content" name="content" rows="5">{{$post->content}}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'Url dell'immagine" value="{{$post->image}}">
    </div>

    <div class="form-group">
        <label for="category_id">Categoria</label>
        <select name="category_id" id="category_id" class="form-control">
            <option>Nessuna categoria</option>
            @foreach ($categories as $category)
                <option @if(old("category_id") == $category->id) selected @endif value="{{$category->id}}">
                    {{$category->name}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">{{$save}}</button>
        <a href="{{route("admin.posts.index")}}" class="btn btn-secondary">Indietro</a>
    </div>
</form>