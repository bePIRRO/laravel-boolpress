@extends('layouts.app')

@section('content')
<div class="container">

    @include('includes.errors_alert')

    <header>
        <h1>Crea post</h1>
    </header>
        <section id="form">
            @include("includes.admin.posts.form")
        </section>

</div>
@endsection 