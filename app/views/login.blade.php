@extends('main')

@section('content')
    <div class="error-msg"> {{{ isset($error) ? $error : "" }}}</div>
    <fieldset>
    	{{ Form::open(array('url' => '/authorize')) }}
            {{ Form::label('username', 'Username') }}:<br />
            {{ Form::text('username') }}<br />
            {{ Form::label('password', 'Password') }}:<br />
            {{ Form::password('password') }}<br />
            {{ Form::submit('Login') }}<br />
        {{ Form::close() }}
    </fieldset>
@stop