@extends('layouts.app')


@section('content')

    <div class="container py-5">
        <h2>Titolo: {{$post->title}}</h2>
        <h2>Titolo 2: {{$post->slug}}</h2>
        <p>Descrizione: {{$post->content}}</p>
    </div>
@endsection