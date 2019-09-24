<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
<link type="text/css"  rel="stylesheet"    href=" all.css">
    <link type="text/css" rel="stylesheet" href="source/new.css">
</head>
<body>
<header  class="header">
    <ul  class="stu">
        <img src="source/info1.png"/><sub> 4</sub>
        <img src="source/123.png"/><sub>3</sub>
        <img src="source/cogai.jpg" alt="..." class="rounded-circle" style="padding-right: 10px;">
        <img src="source/kk.png" />
    </ul>



</header>
<nav class="nav">
    <div class="right">
        <div>
            <input type="text" placeholder="Tim kiem">

        </div>
        <div  class=" item">
{{--            <nav class="nav flex-column">--}}
{{--                <li class="nav-item dropdown" >--}}
{{--                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Product</a>--}}
{{--                    <div class="dropdown-menu">--}}
{{--                        <a class="dropdown-item" href="listsp">List DS</a>--}}
{{--                        <a class="dropdown-item" href="#">Add</a>--}}

{{--                    </div>--}}
{{--                </li>--}}
                <li>
                    <a > Product</a>
                    <ul>

                        <li><a href="listsp"> List DS</a></li>
                        <li><a href="#"> Them Product</a></li>
                        <li><a href="#"> Xoa Product</a></li>
                    </ul>

                </li>
            <li style="color: black">
                <a > Category</a>
                <ul>

                        @foreach($loai_sp as $loai)
                            <a  style="text-decoration: none" href="{{route('loai-san-pham',$loai->id)}}">{{$loai->TenLoai}}</a><br>
                        @endforeach

                </ul>

            </li>
            <li style="color: black">
                <a > Froms</a>


            </li>



{{--                <li class="nav-item dropdown" >--}}
{{--                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>--}}
{{--                    <div class="dropdown-menu">--}}
{{--                       @foreach($loai_sp as $loai)--}}
{{--                       <a href="{{route('loai-san-pham',$loai->id)}}">{{$loai->TenLoai}}</a><br>--}}
{{--                           @endforeach--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link"  href="loaisanpham">Category</a>--}}

{{--                </li>--}}

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link"  href="#">Froms</a>--}}

{{--                </li>--}}


        </div>


    </div>
    <div  class="center">
        <div class="Dashboard">
            <div  class="Cart">
                <div style="display: inline-table">
                    <p style="margin-bottom: 0px;">
                        <span style="font-weight: bold; padding-right: 10px;">Product</span>control pannel </p>
                </div>
                <div  class="giohang">
                    <a href="{{route('shoppingCart')}}" style="text-decoration: none" >
                        <div style="padding-top: 5px;">
                            <img src="source/cart.jpg"  href="#" height="25" width="25" style="padding-right: 5px"/>Gio Hang   <span >{{Session::has('cart') ? Session::get('cart')->totalQty : ''}} </span></div>

                    </a>

                </div>


            </div>



{{--            <div style="display: table-cell; padding-left: 600px;"> Home   > Product</div>--}}

            {{--               <div>--}}
{{--                   @if()--}}
{{--               </div>--}}

        </div>
        <div class="Content">
            @yield('content')
        </div>




    </div>
    <footer class="footer">
{{--        <p style="text-align: center;">Copyright © 2014-2019 AdminLTE. All rights reserved.</p>--}}


    </footer>
</nav>
</body>
</html>