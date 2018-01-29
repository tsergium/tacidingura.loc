@extends('layouts.master')
@section('content')
    <div class="container">
		<div class="row">
			@foreach($products as $key => $value)
				@include('partials.product', array('product' => $value))
			@endforeach
		</div>
	</div>
@stop