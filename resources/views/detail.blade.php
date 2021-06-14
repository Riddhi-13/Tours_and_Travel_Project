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

  
<div class="selectroom">
        <div class="container">	

    
    
            <div class="selectroom_top">
                <div class="col-md-4 selectroom_left" data-wow-delay=".5s">
                     <img src="{{ asset('uploads/package/' . $packages['package_image']) }}" class="img-responsive" alt="image not found"style="height: 200px;
    width: 340px;">
                
                   
                </div>
                <div class="col-md-6 selectroom_right">
                    <h2>Package Name: {{$packages['package_name']}}</h2>
                    
                    <p ><b>Package Type:</b> {{$packages['package_type']}}</p>
                    <p><b> Location:</b> {{$packages['package_location']}}</p>
                        
                      
                            <div class="clearfix"></div>
                    
                </div>
                </div>
                </div>
                <div  style="margin-left:14%;">
             <h3 >Package Features</h3>
                    <p style="padding-top: 1%; padding-right: 12%; font-size: 20px;">
                    {{$packages['package_features']}}

                    </p>	
                    <div class="clearfix"></div> 
                    </div>
                <div  style="margin-left:14%;">
             <h3 >Package Details</h3>
                    <p style="padding-top: 1%; padding-right: 12%; font-size: 20px;">
                    {{$packages['package_details']}}

                    </p>	
                    <div class="clearfix"></div> 
                    </div>
 
                    <a href="/bookTour/{{$packages['id']}}" class="bookTour"><button   class="btn-primary btn" style="margin-left: 42%;margin-top: 4%; font-size: 20px;">Book</button></a>

        
    </div>

</body>

</html>
