@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                @if(Session::has('success'))
                    <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            @foreach($products->chunk(3) as $productChunk)
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach($productChunk as $product)
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <img src="{{ $product->imagePath }}" class="card-img-top" alt="...">
                                <div class="card-body" >
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <p class="card-text" style="color: #7f7f7f;">{{ $product->description }}</p>
                                    <div class="float-left price">${{ $product->price }}</div>
                                    <a href="{{ route('product.addToCart', ['id' =>$product->id]) }}" class="btn btn-success float-right" role="button">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
