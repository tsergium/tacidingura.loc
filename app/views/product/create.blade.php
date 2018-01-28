@extends('layouts.master')
@section('content')

<h1>Create a Nerd</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'product/store')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('lastname', 'Lastname') }}
        {{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('gender', 'Gender') }}
        {{ Form::select('gender', array('0' => 'Male', '1' => 'Female'), Input::old('gender'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('facebook_id', 'Facebook Id') }}
        {{ Form::text('facebook_id', Input::old('facebook_id'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop