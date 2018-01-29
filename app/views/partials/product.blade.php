<div class="col-sm-3 dynpost">
    <div class="modul-produs">
        <div class="rebon1"><p>50%</p></div>
        <img src="img/PluginzShoot2-21_1024x1024.jpg" class="img-responsive image-product">
        <div class="descriere">
            <h1>{{ $product->name }}</h1>
            <p><span>{{ number_format($product->oldPrice, 2) }}</span> / {{ number_format($product->newPrice, 2) }} lei</p>
            @if (Auth::check())
                <a class="btn btn-default btn-xs" href="{{ URL::to('product/' . $product->id . '/edit') }}">edit</a>
            @endif
        </div>
    </div>
</div>