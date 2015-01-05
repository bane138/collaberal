@extends('main')

@section('content')
	@foreach($user as $data)
		<h1>{{$data->username}}</h1>
		<h3>Created: </h3>
		<p><span>{{$data->first_name}}</span> <span>{{$data->last_name}}</span>
		<p>{{$data->email}}</p>
	@endforeach
@stop