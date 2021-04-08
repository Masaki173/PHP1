<html>
<head>
<title>@yield('title')</title>
<style>
.header-left{float:left;}
.header-right{float:right;}
.form{text-align:center;}
</style>
</head>
<body>
<header>
<div class="header-left">
<p>@yield('title')</p>
</div>
<div class="header-right">
<a href="/user">login</a>
<a href="/user/create">register</a>
</div>
</header>
<div class="form">
@yield('form')
</div>
</body>
</html>
