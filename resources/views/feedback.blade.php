<html>
    <head>
        <title>NSIT Computer Solution</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="main1.css">
        <link rel="stylesheet" href="footer.css">
    </head>
    <style>
    body{
  margin:0;
  padding:0;
}

.mainsel{
  background: none;
  border: 2px hidden #000;
  text-transform: uppercase;
  padding:8px 10px;
  min-width: 10px;
  margin:10px;
  cursor: pointer;
  transition: color 0.4s linear;
  position: relative;
}
.mainsel:hover{
  color:#fff;
}
.mainsel::before{
  content: "";
  position: absolute;
  left:0;
  top:0;
  width: 100%;
  height: 100%;
  background:#ff8533;
  z-index: -1;
  transition: transform 0.5s;
  transform-origin:0 0;
  transition-timing-function:cubic-bezier(0.5,1.6,0.4,0.7);
  transform: scaleX(0);
}
.mainsel:hover::before{
transform: scaleX(1);
}


.textcontainer {
    position: relative;
    text-align: center;
    color: #fff;
}
.centered {
    position: absolute;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.zoom {
  transition: transform .2s;
}

.zoom:hover {
  transform: scale(1.10);
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  /* Style the container/contact section */
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
  }
  
  /* Create two columns that float next to eachother */
  .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
</style>

    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark nav-items">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <img src="{{ asset('pic/logo.png') }}" width="100" class="img-fluid rounded-circle";alt="">
          <a class="mainsel" href="{{ url('main') }}" style="margin-left: 10px;"><h1>NSIT</h1> </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="mainsel" style="margin-left: 10px;" href="{{ url('viewlist') }}">Desktop</a>
              </li>
              <li class="nav-item">
                <a class="mainsel" style="margin-left: 10px;" href="{{ url('viewlist2') }}">Laptop</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('search.product') }}">
              {{csrf_field() }} 
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchProduct"> 
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" style="margin-right:10px">
                    @auth
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
      
        <div class="container-fluid" style="margin-top: 10px">
        <div class="row">

            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="w3-animate-zoom" style="text-align: center;">
                    <div class="jumbotron">
                        <h1 class="display-5">Thank You For Your Feedback/Enquiry.</h1>
                        <p class="lead">We will reply you within three working days.</p>
                        <hr class="my-4">
                        <p>Please always check your email inbox.</p>
                        <a class="btn btn-primary btn-lg" href="{{ url('main') }}" role="button">Home</a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        </div>



 
</html>
