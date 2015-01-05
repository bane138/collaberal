@extends('main')

@section('content')
    @foreach($users as $user)
        <h1><a href="profile/{{$user->id}}">{{$user->username}}</a></h1>
        <p>Member: {{$user->first_name}} {{$user->last_name}}</p>
    @endforeach
@stop
