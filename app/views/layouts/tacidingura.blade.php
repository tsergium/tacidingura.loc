<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>{{ $seo_title }}</title>
	<style>@import url(http://fonts.googleapis.com/css?family=Open+Sans);</style>
	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
	<link href="/packages/css/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="/packages/css/style.css" rel="stylesheet" media="screen">
    <link href="/packages/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
	
    <link rel="stylesheet" href="/packages/js/Bootstrap-Image-Gallery-3.1.1/css/blueimp-gallery.min.css">
	<link rel="stylesheet" href="/packages/js/Bootstrap-Image-Gallery-3.1.1/css/bootstrap-image-gallery.min.css">
	<link rel="stylesheet" type="text/css" href="/packages/animate/animate.css">
</head>
<body>

	
	{{ View::make('partials.navigation', array('loggedIn' => Auth::check())) }}
	
		@yield('content')
	
	
	{{ View::make('partials.footer', array() )}}

	
	


	
	
<!-- jQuery library -->
<script src="/packages/js/jquery.js"></script>

<!-- our custom JavaScript -->
<script src="/packages/js/custom-script.js"></script>

<!-- bootstrap JavaScript -->
<script src="/packages/css/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/packages/css/bootstrap/docs-assets/js/holder.js"></script>

<!-- bootstrap image gallery JavaScript -->
<script src="/packages/js/Bootstrap-Image-Gallery-3.1.1/js/jquery.blueimp-gallery.min.js"></script>
<script src="/packages/js/Bootstrap-Image-Gallery-3.1.1/js/bootstrap-image-gallery.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>	
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