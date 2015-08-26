<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}
    <p>
    {{ $errors->first('name') }}
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
    {{ $errors->first('password_confirmation') }}
    </p>

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>