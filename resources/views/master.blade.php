<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <base href=" {{}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="source/porto.css">
</head>
<body>
<div class="themeporto">
    <div class="header">
        <div class="porto">
          <a href="layout.html"> <img src="source/poto.jpg" height="40" width="50"/> </a>
        </div>

        <div class="left-header" >
            <nav class="nav" >
                <ul >
                    <li><a href="#"> About Us</a></li>
                    <li><a href="#"> Contact Us</a></li>
                    <li> |</li>
                    <li><a href="#"> (123)456 789</a></li>
                </ul>

            </nav>
            <div class="home">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: blue">ELEMENTS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#"> PAGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> BUY PORTIO</a>
                    </li>



                </ul>

            </div>

        </div>

    </div>
    <div class="slide">
        <div class="bd-example" >
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="source/12.gif " style="height: 400px" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="source/13.gif" style="height: 400px"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="source/14.gif"style="height: 400px"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
    <div class="bottom-slide" >
        <div class="Technology">
            <strong style="display: block;font-size: 1.25em;font-weight: 500;padding-bottom: 5px;">The fastest way to grow your business with the leader in Technology</strong>
            <p> Check out our options and features included.</p>

        </div>
        <div class="more-learn">
            <button type="button" class="btn btn-secondary"> Get Started Now</button>
           <span>or<a href="layout.html" style="text-decoration: underline;margin-left: 10px; color: white;">more lear</a></span>
        </div>

    </div>
    <div>
        @yield('content')
    </div>
    

    <div class="footer" style="background-color:black; height: 100px; margin-top: 400px;">
        <h2>porto</h2><br>
        <p> © Copyright 2019. All Rights Reserved.</p>

    </div>
</div>



</body>
</html>