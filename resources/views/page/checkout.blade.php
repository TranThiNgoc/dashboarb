@extends('testt')
@section('content')
    div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h1> Check out</h1>
        <h4> Your total:{{$total}}</h4>
        <from action="{{route('checkout')}}" method="post">
            
        </from>
    </div>
    </div>





    @endsection