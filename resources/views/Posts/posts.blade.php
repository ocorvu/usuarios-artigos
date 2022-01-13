@extends('templates')

@section('pageTitle')
    Posts
@endsection

@section('title')
    Posts
@endsection

@section('content')

    @foreach ($posts as $post) 

        <h2 class="post-title">{{ $post->title }}</h2>
        <h3 class="post-subtitle">{{ $post->subtitle }}</h3>
        <div class="flex">
        <h4 class="small p-10">{{ date('d/m/Y H:i:s', strtotime($post->created_at)) }}</h4>
        <h4 class="author small p-10">Por: Author</h4>
        </div>
        <p class="post p-10 m-auto">
            {{ substr($post->content, 0, 180) }}...
            <a class="small" href="{{ route('posts.show', $post->slug) }}">Ler matéria completa</a>
        </p>
    @endforeach

@endsection