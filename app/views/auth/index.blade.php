@extends('layouts.master')
@section('content')
    {{ Form::open(array('url' => 'auth/login', 'class' => 'form-signin col-md-3 col-md-offset-5', 'role' => 'form')) }}
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    {{ Form::close() }}
@stop