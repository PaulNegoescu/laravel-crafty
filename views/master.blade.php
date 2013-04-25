<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Crafty - Laravel Artisan GUI</title>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		@include('laravel-crafty::assets.style')
	</head>
	<body class="container-fluid">
		<div class="row-fluid">
			@yield('content')
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		@include('laravel-crafty::assets.scripts')
	</body>
</html>