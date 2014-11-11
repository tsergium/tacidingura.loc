<!DOCTYPE html>
<html>
<head>
    <title>Tacidingura</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans);
		body{font-family: 'Open Sans', sans-serif;color: #999;}
	</style>
</head>
<body>
<div class="container">
	{{ View::make('partials.navigation', array('loggedIn' => Auth::check())) }}
	@yield('content')
</div>
</body>
</html>