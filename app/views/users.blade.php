@extends('main')

@section('content')
    <!--@foreach($user as $u)-->
        <h1>{{$user['username']}}</h1>
        <p>Member: {{$user['first_name']}} {{$user['last_name']}}</p>
    <!--@endforeach-->
@stop