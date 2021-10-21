@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-6">
            <h1 class="">I miei post</h1>
          </div>
          <div class="col-6 text-right">
            <a href="" class="btn btn-success">Crea nuovo post</a>
          </div>
      </div>
      
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Scritto il</th>
                <th scope="col">Funzioni</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                  <td>{{$post->title}}</td>
                  <td>{{$post->getFormattedDate("created_at", "d/m/Y")}}</td>
                  <td> <a href=" {{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Vai</a></td>
                </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Non ci sono post da visualizzare.</td>
                    </tr>
                @endforelse
            </tbody>
          </table>
    </div>
@endsection