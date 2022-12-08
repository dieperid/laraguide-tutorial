@extends('layout')

@section('content')
    <form method="post">
        {{csrf_field()}}
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <input type="password" placeholder="Password (confirmation)" required>
        <input type="submit" value="Sign Up">
    </form>
@endsection
