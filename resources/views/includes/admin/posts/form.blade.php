@if($post->exists)

<form method="POST" action="{{ route("admin.posts.update", $post->id) }}">
    @csrf
    @method("PATCH")
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{$post->title}}" required>
    </div>

    <div class="form-group">
        <label for="content">Contenuto del post</label>
        <textarea class="form-control" id="content" name="content" rows="5">{{$post->content}}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'Url dell'immagine" value="{{$post->image}}">
    </div>

    <button type="submit" class="btn btn-success">Crea</button>
</form>