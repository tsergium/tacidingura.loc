<!--
<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="/">Tacidingura.ro</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="/user">Users</a></li>
		<li><a href="/projects">Projects</a></li>
	</ul>
</nav>-->

<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <a class="navbar-brand" href="/">Tacidingura.ro</a>

    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="/articles">Articles</a></li>
            <li><a href="/user">Users</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/tenancy">Tenancy</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if($loggedIn){ ?>
                <li><a href="/auth/logout">Log Out</a></li>
            <?php }else{ ?>
                <li><a href="/auth">Sign In</a></li>
	            <li><a href="/auth/create">Sign Up</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>