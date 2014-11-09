@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">Projects</li>
		</ol>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">Project menu</div>
			<div class="panel-body">
				<a href="/project/create">Create</a>
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

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<td class="col-md-1">ID</td>
							<td>Name</td>
							<td class="col-md-1">Actions</td>
						</tr>
					</thead>
					<tbody>
					@foreach($projects as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->name }}</td>
							<td>
								<div class="btn-group btn-group-justified">
									<a class="btn btn-default btn-xs" href="{{ URL::to('task/' . $value->id . '/project') }}">tasks</a>
								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<center><?php echo $projects->links() ?></center>	
			</div>
		</div>	
	</div>
</div>
@stop