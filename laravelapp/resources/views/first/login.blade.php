@extends('layouts.firstapp')
@section('title', 'Laravel')
@section('setting')
<a href="/user">login</a>
<a href="/user/create">register</a>
@endsection
@section('content')
<form>
<table>
@csrf
<tr><th>E-Mail Address</th><td><input type="email" name="email"></td></tr>
<tr><th>Password</th><td><input type="password" name="password"></td></tr>
<tr><th></th><td><input type="checkbox" name="remember">Remember Me</td></tr>
<tr><th></th><td><button type="submit">Login</button></td></tr>
<tr><th></th><td><a href="#">Forgot Your Password?</a></td></tr>
</table>
</form>
@endsection