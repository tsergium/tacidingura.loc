@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li>Users</li>
			</ol>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
			  <div class="panel-heading">Users menu</div>
			  <div class="panel-body">
					<a href="/user/create">Create</a>
			  </div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $pageName }}</div>
				<div class="panel-body">
					@if (Session::has('message'))
						<div class="alert alert-info">{{ Session::get('message') }}</div>
					@endif

					@foreach($tenancy as $key => $value)
                        <div class="col-md-12">{{ $value->name }}</div>
					@endforeach
					<div class="col-md-12"><?php echo $tenancy->links() ?></div>
				</div>
			</div>
		</div>
	</div>
@stop