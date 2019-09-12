{{--@extends('testt')--}}
{{--@section('content')--}}

{{--<div>--}}
{{--    <table border="1">--}}
{{--        <thead>--}}
{{--        <tr align="center">--}}
{{--            <th> ID</th>--}}
{{--            <th> Ten</th>--}}
{{--            <th> TenTL</th>--}}
{{--            <th> DonGia</th>--}}
{{--            <th> SoLuong</th>--}}
{{--            <th> HinhAnh</th>--}}
{{--            <th> MieuTa</th>--}}
{{--            <th> Delete</th>--}}
{{--            <th> Edit</th>--}}
{{--        </tr>--}}

{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($sanpham as $sp)--}}
{{--            <tr>--}}
{{--                <td> {{$sp->id}}</td>--}}
{{--                <td> {{$sp->Ten}}</td>--}}
{{--                <td> {{$sp->category->TenLoai}}</td>--}}
{{--                <td> {{$sp->DonGia}}</td>--}}
{{--                <td>{{$sp->SoLuong}} </td>--}}
{{--                <td><img alt="" src="{!! asset('resources/image/'.$sp->HinhAnh) !!}" ></td>--}}
{{--                <td> {{$sp->MieuTa}}</td>--}}
{{--                <td><a href="xoa"> Delete</a>  </td>--}}
{{--                <td><a href="Sua"> Edit</a>  </td>--}}
{{--            </tr>--}}
{{--            @endforeach--}}

{{--        </tbody>--}}


{{--    </table>--}}

{{--</div>--}}
{{--@endsection--}}
@extends('testt')
@section('content')
<section id="featured" class="row mt40">
    <div class="container">
        <ul>
{{--            @{int i=0;}--}}
            @foreach( $sanpham as $item )
{{--            i++;--}}
            <div style="margin: 20px;padding-right: 10px;float: left;width: 250px;background-color:#fdfdfe">
                <div class="image"><a href="{{route('chitietsanpham',$item->id)}}"><img alt="" src="{!! asset('source/'.$item->HinhAnh) !!} " style="height: 140px;width: 140px;"></a></div>
                <div style="margin: 20px;padding-top: 9px">
                    <b class="prdocutname" href="" style="font-size: 16pt"> {!! $item->Ten !!}</b>
                    <div class="thumbnail">
                        <p style="color: #1abc9c"> {!! $item->DonGia !!} vnd</p>
                        <div style=" background: #1abc9c;width: 100px;">
                            <a  href="{{route('themgiohang',$item->id)}}" > Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>

{{--                if(i %3 ==0)--}}
{{--                {--}}
{{--            <div style="clear: both;"> </div>--}}
{{--                }--}}
            @endforeach

        </ul>
{{--        <img alt="" src="source/cogai.jpg">--}}



    </div>

</section>
@endsection