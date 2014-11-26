@extends('layouts.master')
@section('content')
    {{ Form::open(array('url' => 'auth/store', 'class' => 'form-signin col-md-3 col-md-offset-5', 'role' => 'form')) }}
        <h2 class="form-signin-heading">Create Account</h2>

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>

        <input name="firstname" type="text" class="form-control" placeholder="First Name" required>
        <input name="lastname" type="text" class="form-control" placeholder="Last Name" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    {{ Form::close() }}
@stop