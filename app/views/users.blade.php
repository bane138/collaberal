@extends('main')

@section('content')
    @foreach($user as $u)
        <h1>{{$u->username}}</h1>
        <p>Member: {{$u->first_name}} {{$u->last_name}}</p>
    @endforeach
@stop