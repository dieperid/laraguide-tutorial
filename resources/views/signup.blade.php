@extends('layout')

@section('content')
    <form method="post">
        {{csrf_field()}}
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <input type="password" placeholder="Password (confirmation)">
        <input type="submit" value="Sign Up">
    </form>
@endsection
