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

					@foreach($users as $key => $user)
                        <div class="col-md-4">
                            <div class="col-md-2">@if ($user->facebook_id)<img class="img-circle" src="https://graph.facebook.com/{{ $user->facebook_id }}/picture">@endif</div>
                            <div class="col-md-10">
                                <div class="col-md-12"><span class="firstname">{{ $user->firstname }}</span> <span class="lastname">{{ $user->lastname }}</span> <small class="gender">(<i>@if ($user->gender) f @else m @endif</i>)</small></div>
                                <div class="col-md-12 btn-group btn-group-justified">
                                    <a class="btn btn-default btn-xs" href="{{ URL::to('user/' . $user->id) }}">show</a>
                                    <a class="btn btn-default btn-xs" href="{{ URL::to('user/' . $user->id . '/edit') }}">edit</a>
                                </div>
                            </div>
                        </div>
                        @if (($key +1) % 3 == 0 )
                        <div class="col-md-12">&nbsp;</div>
                        @endif
					@endforeach
					<div class="col-md-12"><?php echo $users->links() ?></div>
				</div>
			</div>
		</div>
	</div>
@stop