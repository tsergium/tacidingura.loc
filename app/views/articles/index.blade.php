@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li>{{ $pageName }}</li>
			</ol>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
			  <div class="panel-heading">Articles menu</div>
			  <div class="panel-body">
					<a href="/user/create">Create</a>
			  </div>
			</div>
		</div>
		<div class="col-md-9">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            @foreach($articles as $key => $value)
                {{ View::make('partials.article', array('article' => $value)) }}
            @endforeach

			<div class="col-md-12"><?php echo $articles->links() ?></div>
		</div>
	</div>
@stop