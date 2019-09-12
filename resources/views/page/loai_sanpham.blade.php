@extends('testt')
@section('content')
	<div>
{{--		<table border="1">--}}
{{--			<thead>--}}
{{--			<tr align="center">--}}
{{--				<th> ID</th>--}}
{{--				<th> Parent</th>--}}
{{--				<th> TenLoai</th>--}}
{{--				<th> Delete</th>--}}
{{--				<th> Edit</th>--}}

{{--			</tr>--}}

{{--			</thead>--}}
{{--			<tbody>--}}
{{--			@foreach($category as $lt)--}}
{{--				<tr>--}}
{{--					<td> {{$lt->id}}</td>--}}
{{--					<td> {{$lt->Parent}}</td>--}}
{{--					<td> {{$lt->TenLoai}}</td>--}}
{{--					<td><a href="xoa"> Delete</a>  </td>--}}
{{--					<td><a href="Sua"> Edit</a>  </td>--}}

{{--				</tr>--}}
{{--			@endforeach--}}

{{--			</tbody>--}}


{{--		</table>--}}
<div style="font-size: 18pt;">  Sản Phẩm{{$loai_sp->TenLoai}}</div>
		@foreach($sp_theoloai as $item)
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
			@endforeach

	</div>
@endsection