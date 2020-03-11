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
                <a class="mainsel" style="margin-left: 10px;" href="laptop.html">Laptop</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('search.product') }}">
              {{csrf_field() }} 
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchProduct"> 
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
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
              <a href="laptop.html">
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
                <form action="feedback.html">
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
