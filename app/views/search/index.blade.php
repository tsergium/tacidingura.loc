@extends('layouts.tacidingura')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="container">
        <div class="row">
            @foreach($products as $key => $value)
                @include('partials.product', array('product' => $value))
            @endforeach
        </div>
    </div>
    <div class="col-md-12">{{ $products->links() }}</div>
@stop