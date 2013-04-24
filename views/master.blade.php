<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Crafty - Laravel Artisan GUI</title>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<style>
			.results {
				background: #222;
				color: #fff;
				min-height: 300px;
				padding: 10px;
				overflow: auto;
			}

			.btn {
				margin-bottom: 10px;
				min-width: 143px;
			}

			.row-fluid[class*=span] {
				margin-left: 0;
			}
		</style>
	</head>
	<body class="container-fluid">
		<div class="row-fluid">
			@yield('content')
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9/jquery.min.js"></script>
		<script>
			
		</script>
	</body>
</html>