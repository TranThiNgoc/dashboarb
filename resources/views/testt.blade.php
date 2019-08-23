<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div style="width: 100%;height: 50px;background-color: lightskyblue; padding-left: 78%; padding-top: 9px; position: relative; ">
        <img src="source/info1.png" height="22" width="25" style="padding-right: 5px;"/><sub> 4</sub>
        <img src="source/123.png" height="21" width="25"  style="padding-right: 5px;"/><sub>3</sub>
        <img src="source/cogai.jpg" alt="..."  height="35" width="40" class="rounded-circle" style="padding-right: 10px;">
        <img src="source/kk.png" height="23" width="25" style="padding-right: 9px;"/>
    </div>


</header>
<div style="width: 100% ;position: relative;float: left; ">
    <div class="right" style="width: 20%; height: 960px;background-color: whitesmoke; position: relative;display: table-cell; ">
        <div>
            <input type="text" value="Tim kiem"  style="width: 100%;">
            <p style="background-color: darkslategray;"></p>

        </div>
        <div style="padding-left: 10px;">
            <nav class="nav flex-column">
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Product</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="listsp">List DS</a>
                        <a class="dropdown-item" href="#">Add</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link"  href="loaisanpham">Category</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link"  href="#">Froms</a>

                </li>

            </nav>

        </div>


    </div>
    <div  class="center" style="width: 80%; height: 300px;position: relative;display: table-cell;">
        <div class="Dashboard " style=" width:1050px;background-color: lavender; height: 60px; padding-left: 20px;">
            <div  style="display: table-cell; padding-left: 20px;" > <p ><span style="font-weight: bold; padding-right: 10px;">Product</span>control pannel </p></div>
            <div style="display: table-cell; padding-left: 600px;"> Home   > Product</div>

        </div>
        <div style="padding-top: 40px;padding-left: 20px;">
            @yield('content')
        </div>




    </div>
    <footer>
        <p style="text-align: center;">Copyright © 2014-2019 AdminLTE. All rights reserved.</p>


    </footer>
</div>
</body>
</html>