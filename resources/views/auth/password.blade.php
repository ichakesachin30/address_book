<!-- resources/views/auth/password.blade.php -->

<form method="POST" action="/password/email">
    {!! csrf_field() !!}
    <p>
    {{ $errors->first('email') }}
    </p>
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <button type="submit">
            Send Password Reset Link
        </button>
    </div>
</form>