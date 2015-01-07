@extends('main')

@section('content')
	<h1>{{ $user->username }}</h1>		
	<h3>Created: {{$user->updated_at}}</h3>
	<p><span>{{$user->first_name}}</span> <span>{{$user->last_name}}</span>
	<p>{{$user->email}}</p>
@stop