@extends('templates')

@section('pageTitle')
    Post
@endsection

@section('title')
<div class="post-title">{{ $post['title'] }}</div>
@endsection

@section('content') 

    <h2 class="post-subtitle">{{ $post['subtitle'] }}</h2>
    <div class="flex">
    <h4 class="small p-10">{{ date('d/m/Y H:i:s', strtotime($post['created_at'])) }}</h4>
    <h4 class="author small p-10">Por: Author</h4>
    </div>
    <p class="post p-10 m-auto">
        {{ $post['content'] }}
    </p>

@endsection