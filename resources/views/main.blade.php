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
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin:10px">Search</button>
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
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner container;col-xl-12">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('pic/pic1.jpg') }}" style="position: relative;img-fluid;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('pic/pic2.jpg') }}" style="position: relative;img-fluid;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('pic/pic3.jpg') }}" alt="Third slide" style="position: relative;img-fluid;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="textcontainer;container" style="position: relative;">
          <div class="row textcontainer">
            <div class="col-lg-6 zoom">
              <a href="{{ url('viewlist') }}">
              <img src="{{ asset('pic/desktopmain.jpg') }}" alt="" class="img-fluid" style="height:456px;"></a>
              <h1 class="centered">Desktop</h1>
            </div>
            <div class="col-lg-6 zoom">
              <a href="{{ url('viewlist2') }}">
              <img src="{{ asset('pic/laptopmain.webp') }}" alt="" class="img-fluid"  style="height:456px;"></a>
              <h1 class="centered">Laptop</h1>
            </div>
          </div>
        </div>
    </body>



    <footer>
        <div class="container">
            <div style="text-align:center">
              <h2>Contact Us</h2>
              <p>Swing by for a cup of coffee, or leave us a message:</p>
            </div>
            <div class="row">
              <div class="column">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3045.8458654013953!2d103.62405945581965!3d1.6403206808707351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe27fabf2aa6743dd!2sNSIT%20Academy!5e0!3m2!1sen!2smy!4v1575364860214!5m2!1sen!2smy" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
              <div class="column">
                <form action="{{ url('feedback') }}">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                  <label for="email">E-mail</label>
                  <input type="text" id="email" name="email" placeholder="Your email address.." required>
                  <label for="country">Country</label>
                  <select id="country" name="country">
                    <option value="australia">Malaysia</option>
                    <option value="canada">Singapore</option>
                    <option value="usa">Thailand</option>
                  </select>
                  <label for="subject">Subject</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
                  <input type="submit" value="Submit">
                </form>
              </div>
            </div>
          </div>
    </footer>
</html>
