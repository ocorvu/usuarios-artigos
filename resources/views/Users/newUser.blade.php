@extends('templates')

@section('pageTitle')
    User - New
@endsection
@section('title')
    New User
@endsection

@section('content')
    <form class="flex" action="{{route('users.store')}}" method="POST">
        @csrf

        <label class="p-10" for="nameID">Full Name</label>
        <input name="name" id="nameID" type="text" placeholder="Pedro Paulo Pereira Pinto" required>

        <label class="p-10" for="emailID">Email</label>
        <input name="email" id="emailID" type="email" placeholder="Your best email" required>

        <label class="p-10" for="passwordID">Password</label>
        <input type="password" name="password" id="passwordID" required>

        <button class="btn m-10 p-10" type="submit">Send</button>
    </form>
@endsection