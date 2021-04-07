@extends('layouts.firstapp')
@section('title', 'Laravel')
@section('form')
<form>
<p><label>E-Mail Address <input type="email" name="email"></label></p>
<p><label>Password <input type="password" name="password"></label></p>
<p><label><input type="checkbox" name="remember"> Remember Me</label></p>
<button type="submit">Login</button>
<a href="#">Forgot Your Password?</a>
</form>
@endsection