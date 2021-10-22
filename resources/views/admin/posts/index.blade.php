@extends("layouts.app")

@section("content")
    <div class="container">
      @if(session("alert-message"))
          <div class="alert alert-{{session("alert-type")}}">
            {{ session("alert-message") }}
          </div>
      @endif    
        <div class="my-5 d-flex justify-content-between align-items-center">
          <h1 class="">I miei post</h1>
          <a href="{{route("admin.posts.create")}}" class="btn btn-success">Nuovo post</a>
          </div>

        <table class="table bg-white">
            <thead>
              <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Scritto il</th>
                <th scope="col" class="text-center">Funzioni</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                  <td>{{$post->title}}</td>
                  <td>{{$post->getFormattedDate("created_at", "d/m/Y")}}</td>
                  <td class="d-flex justify-content-end">
                    <a href=" {{route("admin.posts.show", $post->id)}}" class="btn btn-primary">Vai</a>
                    <a href=" {{route("admin.posts.edit", $post->id)}}" class="btn btn-warning mx-2">Modifica</a>
                    <form action="{{ route("admin.posts.destroy", $post->id)}}" method="post">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                  </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Non ci sono post da visualizzare.</td>
                    </tr>
                @endforelse
            </tbody>
          </table>
    </div>

    @section('scripts')
        <script>
          
        </script>
    @endsection
@endsection