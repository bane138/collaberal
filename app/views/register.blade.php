@extends('main')

@section('content')
    <fieldset>
        <form method="POST" action="create">
            <label>First Name:</label><br />
            <input type="text" name="first_name" /><br />
            <label>Last Name:</label><br />
            <input type="text" name="last_name" /><br />
            <label>Email:</label><br />
            <input type="text" name="email" /><br />
            <label>Username:</label><br />
            <input type="text" name="username" /><br />
            <label>Password:</label><br />
            <input type="password" name="password" /><br />
            <input type="submit" name="submit" value="Create User" />
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
    </fieldset>
@stop