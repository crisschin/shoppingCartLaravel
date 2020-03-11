<!doctype html>
<html lang="en">
  <head>
    <title>NSIT Computer Solution</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link rel="stylesheet" href="main1.css">
        <link rel="stylesheet" href="footer.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark nav-items">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <img src="pic/logo.png" width="100" class="img-fluid rounded-circle";alt="">
        <a class="mainsel" href="{{ url('main') }}" style="margin-left: 10px;"><h1>NSIT</h1></a>
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
        <div class="progress" style="margin-top: 5px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Ordering</div>
        </div>
            <div class="container-fluid" style="margin-top: 10px">
                <div class="row">
                    <div class="col-md-2" style="margin-top: 50px;"><!--3 for 4 item in 1 row-->
                        <h2>Filter By</h2> 
                            <div class="dropdown" style="padding-bottom: 10px;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Brand</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="brand.html">Dell</a>
                                    <a class="dropdown-item" href="brandasus.html">ASUS</a>
                                </div>
                            </div>
                            <div class="dropdown" style="padding-bottom: 10px;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Price</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="price1.html">RM 3 000 - RM 7 000</a>
                                    <a class="dropdown-item" href="price2.html">RM 7 000 - RM 10 000</a>
                                    <a class="dropdown-item" href="price3.html">RM 10 000 and above</a>
                                </div>
                            </div>
                            <div class="dropdown" style="padding-bottom: 10px;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CPU
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="i5.html">Intel i5</a>
                                    <a class="dropdown-item" href="i7.html">Intel i7</a>
                                    <a class="dropdown-item" href="i9.html">Intel i9</a>
                                </div>
                            </div>
                            <div class="dropdown" style="padding-bottom: 10px;">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                GPU
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="1660.html">RTX 1660</a>
                                    <a class="dropdown-item" href="2060.html">RTX 2060</a>
                                    <a class="dropdown-item" href="2070.html">RTX 2070</a>
                                    <a class="dropdown-item" href="2080.html">RTX 2080</a>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <div class="card border-0">
                            <div class="row">
                            @yield('content')
                            </div>
                        </div>
                    </div> 
 
                </div>
            </div>
            <div class="col-md-1"></div>

        <div class="row">
            <div class="col-md-12 bg-info">
                    NSIT Academy <br>
                    No.16, Jalan Sri Putra 1,
                    Bandar Putra, 
                    81000 Kulai, Johor <br>
                    607-6600628
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>