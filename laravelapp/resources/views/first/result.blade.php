@extends('layouts.firstapp')
@section('title', 'Laravel')
@section('setting')
<p>{{$username}}</p>
@endsection
@section('content')
<div class="result">
<table>
<tr><th>Dashboard</th></tr>
<tr><th>You are logged in!</th></tr>
</table>
</div>
@endsection