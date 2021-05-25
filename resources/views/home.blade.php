<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/view.css" />
  </head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Travels</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="active2"><a href="#">Tour Packages</a></li>
     
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</body>
<h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</h2>

<body>
<div class="container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/1.jpg" alt="Los Angeles" style="width:100%;height: 550px;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="Chicago" style="width:100%;height: 550px;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="New York" style="width:100%;height: 550px;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




<div class="container">

<div class="holiday">

<h3>Packages</h3>


  <div class="rom-btm">
    <div class="container">
    @foreach($packages as $item)
      <div class="rom-btm">
        <div class="col-md-3 room-left  ">
          <img src="{{ asset('uploads/package/' . $item ->package_image) }}" class="img-responsive" style="height: 154px;
    width: 255px;" alt="Image not found">
        </div>
        <div class="col-md-6 room-midle "  style="font-size: 13px;">
          <p> <b>Package Name: </b>{{$item['package_name']}}</p>
          <p> <b>Package Type: </b> {{$item['package_type']}}</p>
          <p><b>Location :</b> {{$item['package_location']}}</p>
        </div>
        <div class="col-md-3 room-right  ">
          <h5 style="font-size: 15px; font-weight:bold;     margin-bottom: 25px;"> ₹: {{$item['package_price']}}/-</h5>
         <a href="detail/{{$item['id']}}" class="view"><button class="btn btn-primary" >Detail</button></a>
        </div>
        <div class="clearfix"></div>
      </div>
      @endforeach
    </div>
  </div>
  <div><a href="view" class="view" style="margin-left:43%; "><button class="btn btn-primary">  View More </button></a></div>
  </div>
  <div class="clearfix"></div>
  </div>


</body>

</html>
