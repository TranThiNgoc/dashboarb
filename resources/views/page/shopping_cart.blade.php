
@extends('testt')
@section('content')

    @if(Session::has('cart'))
        <div class="row">
            <div>
                <ul class="list-group">
                    @foreach($sanphams as $sanpham)
<!--                --><?php
//                            print_r($sanpham);
//                ?>

                        <li class="list-group-item">
                            <span> {{$sanpham['qty']}}</span>
                            <strong>{{$sanpham['item']['Ten']}} </strong>

{{--                            <span>{{ ['price'] =>[ $product->price]}}</span>--}}

                            <span>{{$sanpham ['price']}}</span>
                            <div class="btn-group">
                                <button class="btn btn-primary" data-toggle="dropdown">
                                    Action<span class="caret"> </span>

                                </button>
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li><a href="#">Reduce By 1</a></li>--}}
{{--                                    <li><a href="#">Reduce All</a></li>--}}
{{--                                </ul>--}}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong> Total:{{$totalPrice}}</strong>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a  href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout </a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2> No item in Cart</h2>
            </div>
        </div>
    @endif
@endsection