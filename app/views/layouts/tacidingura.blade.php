<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $seo_title }}</title>
	<style>@import url(http://fonts.googleapis.com/css?family=Open+Sans);</style>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/packages/animate/animate.css">
    <style>
		body{font-family: 'Open Sans', sans-serif;color: #999;}
		.nopadding{padding: 0 !important;margin: 0 !important;}
        .bt_hidden{ opacity:0;}
        .bt_visible{ opacity:1;}
    </style>
</head>
<body>
<div class="container">
	{{ View::make('partials.navigation', array('loggedIn' => Auth::check())) }}
	@yield('content')
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="/packages/animate/viewportchecker.js"></script>
<script>
    $(document).ready(function(){
        $('.js-lazy-youtube').click(function(){
            var videoId = $(this).attr('data-youtube-id');
            $(this).parent().html("<div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"//www.youtube.com/embed/" + videoId + "\?autoplay=1&vq=hd1080\" frameborder=\"0\" allowfullscreen></iframe></div>");
        });

        $('.dynpost').addClass("bt_hidden").viewportChecker({
            classToAdd: 'bt_visible animated bounceInLeft', // fadeIn, bounceInLeft, bounceInUp, fadeInDown, lightSpeedIn, flipInX
            offset: 100
        });
    });
</script>
<script type="text/javascript">
    // Disqus code
    var disqus_shortname = 'tacidinguraro';
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
</body>
</html>