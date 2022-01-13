@extends('templates')

@section('pageTitle')
    Post - New
@endsection

@section('title')
    New Post
@endsection

@section('content')
    <form class="flex" action="{{route('posts.store')}}" method="POST">
        @csrf

        <label class="p-10" for="titleID">Title</label>
        <input name="title" id="titleID" type="text" required>

        <label class="p-10" for="subtitleID">Subtitle</label>
        <input name="subtitle" id="subtitleID" type="text" required>

        <label class="p-10" for="contentID">Content</label>
        <textarea name="content" id="contentID" cols="30" rows="10"></textarea>

        <button class="btn m-10 p-10" type="submit">Post</button>
    </form>
@endsection