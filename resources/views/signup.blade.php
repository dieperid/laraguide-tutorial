@extends('layout')

@section('content')
    <form method="post">
        {{csrf_field()}}
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required>
        <input name="password_confirmation" type="password" placeholder="Password (confirmation)" required>
        <input type="submit" value="Sign Up">
    </form>
@endsection
