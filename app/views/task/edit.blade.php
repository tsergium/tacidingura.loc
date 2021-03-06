@extends('layouts.master')
@section('content')
	<h1>Edit a Task</h1>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}


	 {{ Form::model($task, array('url' => 'task/'.$task->id.'/update')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Task!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop