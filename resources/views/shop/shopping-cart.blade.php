@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>
            </div>

                @if(Session::has('cart'))
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <ul class="list-group">
                                @foreach($products as $product)
                                    <li class="list-group-item">
                                        <span class="badge">{{ $product['qty'] }}</span>
                                        <strong>{{ $product['item']['title'] }}</strong>
                                    </br>
                                        <span class="badge badge-info" style="font-size: small">${{ $product['price'] }}</span>
                                        <a class="btn btn-primary" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}" role="button">Reduce by 1</a>
                                        <a class="btn btn-primary" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" role="button">Reduce All</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                           <strong>Total: ${{ $totalPrice }}</strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <h2>No Items in Cart!</h2>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection