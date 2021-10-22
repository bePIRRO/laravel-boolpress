@extends('layouts.app')

@section('content')
<div class="container">
    <header>
        <h1>Crea nuovo post</h1>
    </header>
        <section id="form">
            <form method="POST" action="{{ route("admin.posts.store") }}">
                @csrf
                
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" required>
                </div>

                <div class="form-group">
                    <label for="content">Contenuto del post</label>
                    <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'Url dell'immagine">
                </div>

                <button type="submit" class="btn btn-success">Crea</button>
            </form>
        </section>

</div>
@endsection 