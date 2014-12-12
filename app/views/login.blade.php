@extends('main')

@section('content')
    <fieldset>
        <form method="POST" action="/authorize">
            <label>First Name:</label><br />
            <input type="text" name="first_name" /><br />
            <label>Last Name:</label><br />
            <input type="text" name="last_name" /><br />
            <label>Username:</label><br />
            <input type="text" name="username" /><br />
            <label>Password:</label><br />
            <input type="password" name="password" /><br />
            <input type="submit" name="submit" value="Create User" />
        </form>
    </fieldset>
@stop