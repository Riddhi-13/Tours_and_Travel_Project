
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<<<<<<< HEAD
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <title>Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
   
=======
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
   
</head>

<body>
<<<<<<< HEAD
    
   
    <!-- Main wrapper - style you can find in pages.scss -->
  
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <!-- Topbar header - style you can find in pages.scss -->
      
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
               
              
=======
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                   
                    <a class="navbar-brand" href="dashboard.html">
                       
                        <!-- Logo text -->
                        <span class="logo-text">
                            
                            <!--<img src="plugins/images/logo-text.png" alt="homepage" />  -->
                            
                        </span>
                    </a>
                   
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
<<<<<<< HEAD
                  
                    <!-- Right side toggle and nav items -->
                 
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                      
                        <!-- Search -->
                        
=======
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
<<<<<<< HEAD
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </button>
                                </form>
                        
=======
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <span class="text-white font-medium">Sign out</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
                    </ul>
                </div>
            </nav>
        </header>
<<<<<<< HEAD
      
        <!-- End Topbar header -->
       
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
      
=======
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="package"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Create Package</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="updatePackage"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
<<<<<<< HEAD
                                <span class="hide-menu">Manage Package</span>
=======
                                <span class="hide-menu">Update Package</span>
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
                            </a>
                        </li>
                       
                       
                        <li class="sidebar-item">
<<<<<<< HEAD
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bookingDisplay"
=======
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage.html"
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Booking</span>
                            </a>
                        </li>
<<<<<<< HEAD
                       
=======
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="404.html"
                                aria-expanded="false">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span class="hide-menu">Error 404</span>
                            </a>
                        </li>
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
<<<<<<< HEAD
       
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
       
        <!-- Page wrapper  -->
        
        <div class="page-wrapper" style="min-height: 250px;">
          
            <!-- Bread crumb and right sidebar toggle -->
            
=======
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Create Package</h4>
                    </div>
                </div>
<<<<<<< HEAD
                
            </div>
           
            <!-- End Bread crumb and right sidebar toggle -->
            
            <!-- Container fluid  -->
          
            <div class="container-fluid">
               
                <!-- Start Page Content -->
              
                <div class="row">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                    {{Session::get('message')}}
                    </div>
                    @endif
                    <div class="col-md-12">
                   
=======
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
                        <div class="white-box">
                            <form action="addimage" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                              <div class="form-group">
                              <label for="package_name">Package Name</label>
                             
                              <input type="text" class="form-control" name="package_name" aria-describedby="package_name" placeholder="Enter package name" required>
                              
                              </div>
                              <div class="form-group">
                              <label for="package_type">Package Type</label>
                              <input type="text" class="form-control" name="package_type" placeholder="Enter package type" required>
                              </div>
                              <div class="form-group">
                              <label for="package_location">Package Location</label>
                              <input type="text" class="form-control" name="package_location" placeholder="Enter package location" required>
                              </div>
                              <div class="form-group">
                              <label for="package_price">Package Price</label>
                              <input type="text" class="form-control" name="package_price" placeholder="Enter package price"required>
                              </div>
                              <div class="form-group">
                              <label for="package_features">Package Features</label>
                              <input type="text" class="form-control" name="package_features" placeholder="Enter package features"required>
                              </div>
                              <div class="form-group">
                              <label for="package_details">Package Details</label>
                              <textarea class="form-control" name="package_details" rows="4" placeholder="Enter package details" required></textarea>
                              
                              </div>
                              <div class="form-group">
                              <label for="package_image">Package Image</label>
                              <input type="file" class="form-control-file" name="package_image" required >
                              </div>
                              <button type="submit" class="btn btn-primary"style="padding: 5px 50px;font-size:18px;">Create</button>
                              <button type="reset" class="btn-inverse btn" style="padding: 5px 50px;font-size:18px;">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
              
                <!-- End PAge Content -->
                
                <!-- Right sidebar -->
                
                <!-- .right-sidebar -->
               
                <!-- End Right sidebar -->
               
            </div>
           
            <!-- End Container fluid  -->
            
        </div>
       
        <!-- End Page wrapper  -->
       
    </div>
    
    <!-- End Wrapper -->
    
   
   
=======
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
>>>>>>> b08ba81701e5166203f3372bc202fec9d50f196e
</body>

</html>