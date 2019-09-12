{{--@extends('testt')--}}
{{--@section('content')--}}
{{--    <div>--}}
{{--        <div style="font-size: 18pt;">  Sản Phẩm{{$sanp->Ten}}</div>--}}
{{--        <h4 style="text-align: center">Gio Hang</h4>--}}
{{--        <div style="margin: 20px;padding-right: 10px;float: left;width: 250px;background-color:#fdfdfe">--}}
{{--            <div class="image"><img  href="" alt="" src="{!! asset('source/'.$sanp->HinhAnh) !!} " style="height: 140px;width: 140px;"></div>--}}
{{--            <div style="margin: 20px;padding-top: 9px">--}}
{{--                <b class="prdocutname" href="" style="font-size: 16pt"> {!! $sanp->Ten !!}</b>--}}
{{--                <p> {{$sanp->MieuTa}}</p>--}}
{{--                <div class="thumbnail">--}}
{{--                    <p style="color: #1abc9c"> {!! $sanp->DonGia !!} vnd</p>--}}
{{--                    <div style=" background: #1abc9c;width: 100px;">--}}
{{--                        <a  href="{{route('addCart',$sanp->id)}}" > Add to cart</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--@endsection--}}


{{--@extends('testt')--}}
{{--@section('content')--}}
{{--    <section id="cart_items">--}}
{{--        <div class="container">--}}
{{--            <div class="breadcrumbs">--}}
{{--                <ol class="breadcrumb">--}}
{{--                    <li><a href="#">Home</a></li>--}}
{{--                    <li class="active">Shopping Cart</li>--}}
{{--                </ol>--}}
{{--            </div>--}}
{{--            <div class="table-responsive cart_info">--}}
{{--                @if(count($sanp))--}}
{{--                    <table class="table table-condensed">--}}
{{--                        <thead>--}}
{{--                        <tr class="cart_menu">--}}
{{--                            <td class="image">Item</td>--}}
{{--                            <td class="description"></td>--}}
{{--                            <td class="price">Price</td>--}}
{{--                            <td class="quantity">Quantity</td>--}}
{{--                            <td class="total">Total</td>--}}
{{--                            <td></td>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                            <tr>--}}
{{--                                <td class="cart_product">--}}
{{--                                    <div class="image"><img  href="" alt="" src="{!! asset('source/'.$sanp->HinhAnh) !!} " style="height: 140px;width: 140px;"></div>--}}
{{--                                </td>--}}
{{--                                <td class="cart_description">--}}
{{--                                    <h4><a href="">{{$item->Ten}}</a></h4>--}}
{{--                                    <b class="prdocutname" href="" style="font-size: 16pt"> {!! $sanp->Ten !!}</b>--}}
{{--                                    <p>Web ID: {{!!$item->id!!}}</p>--}}
{{--                                </td>--}}
{{--                                <td class="cart_price">--}}
{{--                                    <p>${!! $sanp->DonGia !!}</p>--}}
{{--                                </td>--}}
{{--                                <td class="cart_quantity">--}}
{{--                                    <div class="cart_quantity_button">--}}
{{--                                        <a class="cart_quantity_up" href=""> + </a>--}}
{{--                                        <input class="cart_quantity_input" type="text" name="quantity" value="" autocomplete="off" size="2">--}}
{{--                                        <a class="cart_quantity_down" href=""> - </a>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td class="cart_total">--}}
{{--                                    <p class="cart_total_price">${{$item->subtotal}}</p>--}}
{{--                                </td>--}}
{{--                                <td class="cart_delete">--}}
{{--                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @else--}}
{{--                            <p>You have no items in the shopping cart</p>--}}
{{--                        @endif--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section> <!--/#cart_items-->--}}
{{--@endsection--}}
@extends('testt')

@section('content')
    Laravel Shopping Cart
@endsection

@section('content')
    @foreach($sanphams->chunk(3) as $productchuck)

    <div class="row">
        @foreach($productchuck as $sanpham )
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $sanpham ->HinhAnh }}" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>{{ $sanpham ->Ten }}</h3>
                    <p class="description">{{ $sanpham ->MieuTa }}</p>
                    <div class="clearfix">
                        <div class="pull-left price">{{ $sanpham ->DonGia }}</div>
                        <a href="{{route('themgiohang',['id' =>$sanpham->id])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
    @endforeach
@endsection