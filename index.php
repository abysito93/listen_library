<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="#">Browse</a></li>
        <li><a href="#"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">




        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://g-ecx.images-amazon.com/images/G/01/Audible/en_US/images/creative/2328_FantasticBeast_ZingDT_1880x800_06._CB536359087_.jpg" alt="Image">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="http://g-ecx.images-amazon.com/images/G/01/Audible/en_US/images/creative/2381_ForgersLife_ZingDT_1880x800._CB534068072_.jpg Image Maybe" alt="Image">
        <div class="carousel-caption">


        </div>
      </div>




        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
  <h3>Best Sellers </h3>
  <div class="row">
    <div class="col-sm-4">
      <img src="http://ecx.images-amazon.com/images/I/611zbBzG3XL._SL300_.jpg" class="img-responsive" style="width:100%" alt="Image">

    </div>
    <div class="col-sm-4">
      <img src="http://ecx.images-amazon.com/images/I/51sakao0D0L._SL300_.jpg" class="img-responsive" style="width:100%" alt="Image">


    </div>
    <div class="col-sm-4">
      <img src="http://ecx.images-amazon.com/images/I/51ejXdSceNL._SL300_.jpg" class="img-responsive" style="width:100%" alt="Image">


      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">

</footer>

</body>
</html>
