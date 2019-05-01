<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width = device-width,initial-scale=1,shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/jquery-3.3.1.min.js') }}"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 @yield('header')
 @yield('body')
</body>
</html>