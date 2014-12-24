@extends('main')

@section('content')
    <div class="error-msg"> {{{ isset($error) ? $error : "" }}}</div>
    <fieldset>
        <form method="POST" action="/authorize">
            <label>Username:</label><br />
            <input type="text" name="username" /><br />
            <label>Password:</label><br />
            <input type="password" name="password" /><br />
            <input type="submit" name="submit" value="Login" />
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </form>
    </fieldset>
@stop