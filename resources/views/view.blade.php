<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
  <title>View</title>
=======
  <title>Home</title>
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<<<<<<< HEAD
=======
  <link type="text/css" rel="stylesheet" href="css/view.css" />
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
  </head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Travels</a>
    </div>
    <ul class="nav navbar-nav">
<<<<<<< HEAD
      <li class="active"><a href="home">Home</a></li>
      <li class="active2"><a href="view">Tour Packages</a></li>
      <li class="active2"><a href="historyDisplay">Travel History</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    @guest
      <li><a href="newReg"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="newlog"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @else
                  <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li>
              @endguest
=======
      <li class="active"><a href="#">Home</a></li>
      <li class="active2"><a href="#">Tour Packages</a></li>
     
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
    </ul>
  </div>
</nav>
</body>
<h2>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<<<<<<< HEAD

  <link type="text/css" rel="stylesheet" href="css/view.css" />
=======
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
  
</h2>

<body>
<<<<<<< HEAD
=======

>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
<div class="container">

<h1 class="text-center" style="font-weight:bold; font-size: 30px; margin-bottom:4%">Package List</h1>

<div class="heading">
    <div class="container">
    @foreach($packages as $item)
      <div class="heading">
        <div class="col-md-3 room-left   ">
<<<<<<< HEAD
          <img src="{{ asset('uploads/package/' . $item['package_image']) }}" class="img-responsive" alt="">
=======
          <img src="{{ asset('uploads/package/' . $item['package_image']) }}" class="img-responsive" alt="" style="height: 154px;
    width: 255px;">
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
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
