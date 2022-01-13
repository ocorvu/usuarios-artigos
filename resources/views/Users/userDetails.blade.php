@extends('templates')

@section('pageTitle')
    User - Details
@endsection

@section('title')
    {{ $user['name'] }}
@endsection

@section('content')
    <p>Email: {{ $user['email'] }}</p>
    <p>Member since: {{ date('d/m/y', strtotime($user['created_at'])) }}</p>
@endsection