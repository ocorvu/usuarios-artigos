<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <nav class="flex">
            <a href="{{route('posts.index')}}">
                <img class="mr-30" src="{{asset('images/blog.png')}}" alt="logo">
            </a>
 
            <a class="link" href="{{ route("posts.create") }}">New Post</a>
            <a class="link" href="{{ route('users.create') }}">New User</a>
            <a href="{{ route('users.index')}}">
                <img class="ml-30" src="{{asset('images/user.png')}}" alt="">
            </a>
        </nav>
    </header>
    <main class="m-auto">
        <h1 class="m-10">@yield('title')</h1>
        <section>
            @yield('content')
        </section>
    </main>

<footer class="p-10">
    <p class="center" id="copy">Copyright 2022 &copy - João da Mata</p>
    <p class="flex">
        <a class="link" href="https://github.com/ocorvu" target="_blank">
            <img class="mr-5" src="{{asset('images/github.png')}}" alt="icone github">Github
        </a>
        <a class="link" href="https://www.linkedin.com/in/joaofhdm/" target="_blanl">
            <img class="mr-5" src="{{asset('images/linkedin.png')}}" alt="icone linkedin">Linkedin
        </a>  
        <a class="link" href="https://twitter.com/damatajao" target="_blank">
            <img class="mr-5" src="{{asset('images/twitter.png')}}" alt="icone twitter">Twitter
        </a>
        <a class="link" href="https://www.instagram.com/damatajao/" target="_blank">
            <img class="mr-5" src="{{asset('images/instagram.png')}}" alt="icone instagram">Instagram
        </a>
    </p>
</footer>
</body>
</html>