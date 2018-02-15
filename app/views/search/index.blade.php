@extends('layouts.tacidingura')
@section('content')
    <!--inceput filtru-->
    <div class="container-fluid light-grey">
        <div class="container filtru">
            <div class="row">
                <div class="col-sm-12" style="margin-top: 50px">
                    <ol>
                        <li><a href="/">Home</a> / </li>
                        <li>{{ $pageName }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!--continut-->
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 text">
                @foreach($products as $key => $value)
                    @include('partials.product', array('product' => $value))
                @endforeach
            </div>
            <div class="col-md-12">{{ $products->links() }}</div>
        </div>
    </div>
@stop
