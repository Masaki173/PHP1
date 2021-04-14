<html>
<head>
<title>@yield('title')</title>
<style>
.header-left{float:left;}
.header-right{float:right;}
 table{margin:0 auto;}
</style>
</head>
<body>
<header>
<div class="header-left">
<p>@yield('title')</p>
</div>
<div class="header-right">
@yield('setting')
</div>
</header>
@yield('content')
</body>
</html>
