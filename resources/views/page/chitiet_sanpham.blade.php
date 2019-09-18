@extends('testt')
@section('content')
    <div>
        <div style="font-size: 18pt;">  Sản Phẩm{{$sanp->Ten}}</div>
        <h4 style="text-align: center">Chi Tiet San Pham</h4>
            <div style="margin: 20px;padding-right: 10px;float: left;width: 250px;background-color:#fdfdfe">
                <div class="image"><img  href="" alt="" src="{!! asset('source/'.$sanp->HinhAnh) !!} " style="height: 140px;width: 140px;"></div>
                <div style="margin: 20px;padding-top: 9px">
                    <b class="prdocutname" href="" style="font-size: 16pt"> {!! $sanp->Ten !!}</b>
                    <p> {{$sanp->SoLuong}}</p>
                    <p> {{$sanp->MieuTa}}</p>
                    <div class="thumbnail">
                        <p style="color: #1abc9c"> {!! $sanp->DonGia !!} vnd</p>
                        <div style=" color:white;background-color:sandybrown;width: 100px; ">

                            <a  href="{{route('themgiohang',$sanp->id)}}"  > Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>


    </div>
@endsection