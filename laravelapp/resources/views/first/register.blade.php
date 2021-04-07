@extends('layouts.firstapp')
@section('title', 'Laravel')
@section('form')
<form>
<p><label>Name <input type="text" name="username"></label></p>
<p><label>E-Mail Address <input type="email" name="new_email"></label>
<p><label>Password <input type="password" name="new_password"></label></p>
<p><label>Confirm Password<input type="password" name="confirm"></input></label></p>
<button type="submit">Register</button>
</form>
@endsection