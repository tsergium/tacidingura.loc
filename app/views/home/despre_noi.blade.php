@extends('layouts.tacidingura')
@section('content')
<!--banner-->
<div class="container-fluid banner_despre_noi banner_set">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{ $pageName }}</h1>
			</div>
		</div>
	</div>
</div>

<!--inceput filtru-->
<div class="container-fluid light-grey">
	<div class="container filtru">
		<div class="row">
			<div class="col-sm-12">
				<ol>
					<li><a href="/">Home</a> / </li>
					<li>{{ $pageName }}</li>
				</ol>	
			</div>
		</div>
	</div>
</div>

<!--continut-->
<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 text">
			<h1>Vedem</h1>
			<p>bla bla</p>
		</div>
	</div>
</div>
@stop