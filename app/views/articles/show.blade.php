@extends('layouts.tacidingura')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li>{{ $pageName }}</li>
			</ol>
		</div>
		<div class="col-md-12">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            {{ View::make('partials.article', array('article' => $article)) }}
		</div>
        {{ View::make('partials.disqus', array()) }}
	</div>
@stop