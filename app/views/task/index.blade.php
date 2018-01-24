@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="/">Home</a></li>
				<li><a href="/projects">Projects</a></li>
				<li>Tasks</li>
			</ol>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
			  <div class="panel-heading">Task menu</div>
			  <div class="panel-body">
					<a href="/task/{{$project_id}}/create">Create</a>
			  </div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $pageName }}</div>
				<div class="panel-body">
					<!-- will be used to show any messages -->
					@if (Session::has('message'))
						<div class="alert alert-info">{{ Session::get('message') }}</div>
					@endif

					<table class="table table-striped">
						<thead>
							<tr>
								<td class="col-md-1">ID</td>
								<td class="col-md-4">Title</td>
								<td class="col-md-5">Description</td>
								<td class="col-md-2">Actions</td>
							</tr>
						</thead>
						<tbody>
						@foreach($tasks as $key => $value)
							<tr>
								<td>{{ $value->id }}</td>
								<td>{{ $value->title }}</td>
								<td>{{ $value->description }}</td>
								<td>
									<div class="btn-group btn-group-justified">
										<a class="btn btn-default btn-xs" href="{{ URL::to('task/' . $value->id . '/show') }}">view</a>
										<a class="btn btn-default btn-xs" href="{{ URL::to('task/' . $value->id . '/edit') }}">edit</a>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					<center><?php echo $tasks->links() ?></center>
				</div>
			</div>
		</div>
	</div>
@stop