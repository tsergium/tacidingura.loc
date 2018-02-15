<div class="col-sm-3 dynpost">
    <div class="modul-produs">
        <div class="rebon1"><p>50%</p></div>
        <a href="{{ $product->affiliateUrl }}" title="{{ $product->name }}" target="_blank" rel="nofollow">
            <img src="{{ $product->image }}" class="img-responsive image-product" alt="{{ $product->name }}">
            <div class="descriere">
                <h1>{{ $product->name }}</h1>
                <p><span>{{ number_format($product->oldPrice, 2) }}</span> / {{ number_format($product->newPrice, 2) }} lei</p>
                @if (Auth::check())
                    <a class="btn btn-default btn-xs" href="{{ URL::to('product/' . $product->id . '/edit') }}">edit</a>
                @endif
            </div>
        </a>
    </div>
</div>