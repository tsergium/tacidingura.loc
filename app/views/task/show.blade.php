@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">Users menu</div>
			  <div class="panel-body">
					<a href="/task/{{$project_id}}/create">Create</a>
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
					<p><?php echo nl2br($task->description) ?></p>
				</div>
			</div>
		</div>
	</div>
@stop