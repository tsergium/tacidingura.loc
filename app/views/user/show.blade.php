@extends('layouts.master')
@section('content')

<h1>All the Nerds</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td class="col-md-1">ID</td>
            <td class="col-md-6">Name</td>
            <td class="col-md-2">Email</td>
            <td class="col-md-2">Gender</td>
            <td class="col-md-1">Actions</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>@if ($user->gender) female @else male @endif</td>
            <td>
				<div class="btn-group btn-group-justified">
					<a class="btn btn-default btn-xs" href="{{ URL::to('user/' . $user->id . '/edit') }}">edit</a>
				</div>
            </td>
        </tr>
    </tbody>
</table>
@stop