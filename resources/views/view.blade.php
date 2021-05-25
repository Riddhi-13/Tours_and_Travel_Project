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

<h1 class="text-center" style="font-weight:bold; font-size: 30px; margin-bottom:4%">Package List</h1>

<div class="heading">
    <div class="container">
    @foreach($packages as $item)
      <div class="heading">
        <div class="col-md-3 room-left   ">
          <img src="{{ asset('uploads/package/' . $item['package_image']) }}" class="img-responsive" alt="" style="height: 154px;
    width: 255px;">
        </div>
        <div class="col-md-6 room-midle " style="font-size: 15px;">
          <p> <b>Package Name:</b>{{$item['package_name']}}</p>
          <p> <b>Package Type :</b> {{$item['package_type']}}</p>
          <p><b >Location : </b >{{$item['package_location']}}</p>
         
        </div>
        <div class="col-md-3 room-right  ">
          <h5 style="font-size: 15px; font-weight:bold;     margin-bottom: 25px;"> ₹: {{$item['package_price']}}/-</h5>
          <a href="detail/{{$item['id']}}" class="view"><button class="btn btn-primary"> Detail</button></a>
        </div>
        <div class="clearfix"></div>
      </div>
      @endforeach
    </div>
  </div>


  </div>


</div>





</body>

</html>
