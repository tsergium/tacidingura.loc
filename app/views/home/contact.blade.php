@extends('layouts.tacidingura')
@section('content')
<!--banner-->
<div class="container-fluid banner_contact banner_set">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>{{ $pageName }}</h1>
			</div>
		</div>
	</div>
</div>

@include('partials.breadcrumbs', ['pageName' => $pageName])

<!--formular contact-->
<div class="container">
	<div class="row">
		<div class="" style="padding-top: 40px; padding-bottom: 40px">
			<div class="col-sm-10 col-sm-offset-1">
				<h1>Formular de contact</h1>
				<form class="form-horizontal" role="form" method="post" action="#contact" >
					<div class="">
						<label for="name" class="control-label">Nume</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Prenume & Nume" value="">
						<p class='text-danger'></p>
					</div>
					<div class="">
						<label for="name" class="control-label">Telefon</label>
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="">
                        <p class='text-danger'></p>
					</div>
					<div class="">
						<label for="email" class="control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                        <p class='text-danger'></p>
					</div>
					<div class="">
						<label for="message" class="control-label">Mesaj</label>
						<textarea class="form-control" rows="14" id="mesaj" name="mesaj" placeholder="Mesaj"></textarea>
                        <p class='text-danger'></p>
					</div>
					<div class="text-right">
						<input name="submit" type="submit" value="Trimite" class="btn btn1" >
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop