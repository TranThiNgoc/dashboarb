@extends('testt')
@section('content')
   <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h1> Check out</h1>
        <h4> Your total:{{$total}}</h4>
        <from action="{{route('checkout')}}" method="post" id="checkout-form">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name"> Name</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="address"> Address</label>
                        <input type="text" id="address" class="form-control" required>

                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="cart"> Card name</label>
                        <input type="text" id="cart" class="form-control" required>

                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-number"> Credit Card Number</label>
                        <input type="text" id="card-number" class="form-control" required>

                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-month"> Expiration Month</label>
                        <input type="text" id="card-month" class="form-control" required>

                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-year"> Expiration Month</label>
                        <input type="text" id="card-year" class="form-control" required>

                    </div>

                </div>


            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-success">Buy now </button>

        </from>
    </div>
    </div>





    @endsection