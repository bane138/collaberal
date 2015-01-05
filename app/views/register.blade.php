@extends('main')

@section('content')
    <fieldset>
        {{ Form::open(array('url' => '/create')) }}
            {{ Form::label('firstname', 'First Name') }}:<br />
            {{ Form::text('firstname') }}<br />
            {{ Form::label('lastname', 'Last Name') }}:<br />
            {{ Form::text('lastname') }}<br />
            {{ Form::label('email', 'Email') }}:<br />
            {{ Form::email('email') }}<br />
            {{ Form::label('username', 'Username') }}:<br />
            {{ Form::text('username') }}<br />
            {{ Form::label('password', 'Password') }}:<br />
            {{ Form::password('password') }}<br />
            {{ Form::submit('Create User') }}<br />
        {{ Form::close() }}
    </fieldset>
@stop