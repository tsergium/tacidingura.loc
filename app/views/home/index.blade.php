@extends('layouts.tacidingura')
@section('content')
<!--banner-->
<div class="container-fluid banner_home banner_set">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1>Taci Din Gura si cauta!</h1>
				<div class="input-group">
					<input type="text" class="form-control2" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn2 btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--inceput filtru-->
<div class="container-fluid light-grey">
	<div class="container filtru">
		<div class="row">
			<div class="col-sm-6">
				<ol>
					<li><a href="/">Home</a> / </li>
					<li>{{ $pageName }}</li>
				</ol>
				
			</div>
			<div class="col-sm-4 ">
				<p>Sorteaza dupa:</p>
			</div>
			<div class="col-sm-2">
				<button class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				REducere
				<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<li><a href="#">50 - 30%</a></li>
					<li><a href="#">15 - 30%</a></li>
					<li><a href="#">0 -15%</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--inceput produse-->
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="modul-produs">
				<div class="rebon1"><p>50%</p></div>
				<img src="img/PluginzShoot2-21_1024x1024.jpg" class="img-responsive image-product">
				<div class="descriere">
					<h1>Keytendo Gaming Console Keyholder</h1>
					<p><span>45.00 lei</span> / 29.00 lei</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3">
			<div class="modul-produs">
				<div class="rebon2"><p>30%</p></div>
				<img src="img/PluginzShoot2-21_1024x1024.jpg" class="img-responsive image-product">
				<div class="descriere2">
					<h1>Keytendo Gaming Console Keyholder</h1>
					<p><span>45.00 lei</span> / 29.00 lei</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3">
			<div class="modul-produs">
				<div class="rebon1"><p>50%</p></div>
				<img src="img/PluginzShoot2-21_1024x1024.jpg" class="img-responsive image-product">
				<div class="descriere">
					<h1>Keytendo Gaming Console Keyholder</h1>
					<p><span>45.00 lei</span> / 29.00 lei</p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-3">
			<div class="modul-produs">
				<div class="rebon2"><p>30%</p></div>
				<img src="img/PluginzShoot2-21_1024x1024.jpg" class="img-responsive image-product">
				<div class="descriere2">
					<h1>Keytendo Gaming Console Keyholder</h1>
					<p><span>45.00 lei</span> / 29.00 lei</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!--continut-->
<div class="container">
	<div class="row">
		
		<div class="col-md-12">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            @foreach($articles as $key => $value)
                <div class="dynpost">{{ View::make('partials.article', array('article' => $value)) }}</div>
            @endforeach

			<div class="col-md-12">{{ $articles->links() }}</div>
		</div>
		
	</div>
</div>



<!--inceput filtru categorii-->
<div class="container-fluid categori">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>CategOrii:</h1>
				<p>JOCURI <span>/ IT /</span> ELECTROCASNICE / MAMA SI COPILU<span> / TELEVIZOARE</span></p>
			</div>
		</div>
	</div>
</div>
@stop