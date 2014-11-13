<!DOCTYPE html>
<html>
<head>
    <title>{{ $seo_title }}</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans);
		body{font-family: 'Open Sans', sans-serif;color: #999;}
		.nopadding{padding: 0 !important;margin: 0 !important;}
	</style>
</head>
<body>
<div class="container">
	{{ View::make('partials.navigation', array('loggedIn' => Auth::check())) }}
	@yield('content')
</div>
<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'tacidinguraro'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = '//' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>
</body>
</html>