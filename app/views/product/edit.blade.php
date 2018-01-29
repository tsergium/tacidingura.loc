@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <h1>Create a Nerd</h1>

        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}

        {{ Form::model($product, array('url' => 'product/'.$product->id.'/update')) }}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('oldPrice', 'Old Price') }}
                {{ Form::text('oldPrice', Input::old('oldPrice'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('newPrice', 'New Price') }}
                {{ Form::text('newPrice', Input::old('newPrice'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('url', 'URL') }}
                {{ Form::text('url', Input::old('url'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('affiliateUrl', 'Affiliate URL') }}
                {{ Form::text('affiliateUrl', Input::old('affiliateUrl'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::text('image', Input::old('image'), array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>
</div>
@stop