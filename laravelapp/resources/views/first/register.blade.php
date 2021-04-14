@extends('layouts.firstapp')
@section('title', 'Laravel')
@section('setting')
<a href="/user">login</a>
<a href="/user/create">register</a>
@endsection
@section('content')
@if(count($errors) > 0)
<p>入力に問題があります。再入力してください。</p>
@endif
<form action="/user/create" method="post">
<table>
@csrf
@error('username')
<tr><th>ERROR</th>
<td>{{$message}}</td></tr>
@enderror
<tr><th>Name </th><td><input type="text" name="username"></td></tr>
@error('new_email')
<tr><th>ERROR</th>
<td>{{$message}}</td></tr>
@enderror
<tr><th>E-Mail Address </th><td><input type="text" name="new_email"></td></tr>
@error('new_pass')
<tr><th>ERROR</th>
<td>{{$message}}</td></tr>
@enderror
<tr><th>Password </th><td><input type="password" name="new_pass"></td></tr>
@error('confirm_pass')
<tr><th>ERROR</th>
<td>{{$message}}</td></tr>
@enderror
<tr><th>Confirm Password </th><td><input type="password" name="confirm_pass"></td></tr>
<tr><th></th><td><button type="submit">Register</button></td></tr>
</table>
</form>
@endsection