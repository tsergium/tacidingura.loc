<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">TACIDINGURA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="/despre_noi">Despre noi
                {{ (Request::is('/users') ? '<span class="sr-only">(current)</span>' : '') }}
            </a></li>
        <li><a href="/faq">intrebari si raspunsuri</a></li>
        <li><a href="/termeni_si_conditi">termeni si conditi</a></li>
		<li><a href="/contact">contact</a></li>
		<li><a href="/contact"><span class=""></span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>