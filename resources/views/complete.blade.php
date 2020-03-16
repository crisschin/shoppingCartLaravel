@extends('template')

    @section('content')
            <div class="container-fluid" style="margin-top: 10px">
                <div class="row">
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                    <div class="col-md-7">
                        <div class="w3-animate-zoom">
                            <div class="jumbotron">
                                <h1 class="display-5">Thank You For SHOPPING With US !!</h1>
                                <p class="lead">We hope your order arrived safely. <br>
                                  If you have any questions or concerns regarding this order, <br>
                                  please contact us through our enquiry form below,<br>
                                  with your details and order number.</p>
                                <hr class="my-4">
                                <img src="pic/shipped.jpg" alt="" width="160" style="float: right;">
                                <p>This is your order number : NS005637IT<br>
                                This is your order tracking number : EM748294728MY </p>
                                <a class="btn btn-primary btn-lg" href="{{ url('viewlist') }}" role="button">Home</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                      <img src="pic/handshake.jpg" alt="" width="500" style="padding-top:60px;">
                    </div>
                </div>
            </div>
      @endsection