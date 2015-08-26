<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
<title>Look at me Login</title>
</head>
<body>
<!--    <form>
        <input type="text" name="username"/>
        <input type="submit" value="Login"/>
    </form>-->
<h1>Login</h1>
{!! Form::open(array('url' => 'auth/login')) !!}

<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) !!}
</p>

<p>
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password') !!}
</p>
<p>
    {!! Form::label('remember', 'Remember Me') !!}
    {!! Form::checkbox('remember')!!}
</p>

<p>{!! Form::submit('Submit!') !!}</p>
{!! Form::close() !!}
<a href="/password/email">Forgot Password</a>
<a href="register">Register</a>
</body>
</html>