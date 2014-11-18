@extends('layouts.tacidingura')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li>{{ $pageName }}</li>
			</ol>
		</div>
		<div class="col-md-8">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            @foreach($articles as $key => $value)
                <div class="postDISABLED">{{ View::make('partials.article', array('article' => $value)) }}</div>
            @endforeach

			<div class="col-md-12">{{ $articles->links() }}</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
			  <div class="panel-heading">Featured Articles</div>
			  <div class="panel-body">
					<a href="/user/create">Create</a>
			  </div>
			</div>
		</div>
	</div>
@stop