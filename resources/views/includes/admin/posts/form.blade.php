@if($post->exists)
<form method="POST" action="{{ route("admin.posts.update", $post->id) }}">
    @method("PATCH")
    @else
    <form method="POST" action="{{route("admin.posts.store")}}">
    @endif
    
    @csrf
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

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">Crea</button>
        <a href="{{url()->previous()}}" class="btn btn-secondary">Indietro</a>
    </div>
</form>