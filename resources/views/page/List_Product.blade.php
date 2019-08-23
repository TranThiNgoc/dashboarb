@extends('testt')
@section('content')

<div>
    <table border="1">
        <thead>
        <tr align="center">
            <th> ID</th>
            <th> Ten</th>
            <th> TenTL</th>
            <th> DonGia</th>
            <th> SoLuong</th>
            <th> HinhAnh</th>
            <th> MieuTa</th>
            <th> Delete</th>
            <th> Edit</th>
        </tr>

        </thead>
        <tbody>
        @foreach($sanpham as $sp)
            <tr>
                <td> {{$sp->id}}</td>
                <td> {{$sp->Ten}}</td>
                <td> {{$sp->category->TenLoai}}</td>
                <td> {{$sp->DonGia}}</td>
                <td>{{$sp->SoLuong}} </td>
                <td>{{$sp->HinhAnh}} </td>
                <td> {{$sp->MieuTa}}</td>
                <td><a href="xoa"> Delete</a>  </td>
                <td><a href="Sua"> Edit</a>  </td>
            </tr>
            @endforeach

        </tbody>


    </table>

</div>
@endsection