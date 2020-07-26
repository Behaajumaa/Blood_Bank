<!DOCTYPE html>
<html lang="en">
<head>

     <title>LBB</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Document</title>

     <link  href="css/bootstrap.min.css"                rel="stylesheet">
     <link  href="css/font-awesome.min.css"             rel="stylesheet" >
     <link  href="css/animate.css"                      rel="stylesheet">
     <link  href="css/owl.carousel.css"                 rel="stylesheet">
     <link  href="css/owl.theme.default.min.css"        rel="stylesheet">
     <link href="css/modern-business.css"               rel="stylesheet">
     <link href="css/jquery-ui.css"                     rel="stylesheet">
     <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
     rel="stylesheet"  type='text/css'>
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

 
<!-- Navigation -->
<!-- Navigation -->
<nav class="navbar navbar-default 	 navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home"> Blood Bank</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav navbar-right">
               <li><a href="/">        <i class="fa fa-home"></i> Home</a></li>
               <li><a href="/aboutUs">     <i class="fa fa-users"></i>   About us</a></li>
               <li><a href="/#news">       <i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
               <li><a href="/contactUs">   <i class="fa fa-envelope"></i>  Contact us</a></li>
               <li><a href="/search">   <i class="fa fa-search" aria-hidden="true"></i>  Search</a></li>


                   <!-- Authentication Links -->
                   @guest
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                   </li>
                   @if (Route::has('register'))
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                       </li>
                   @endif
                   @else
                   <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }} <span class="caret"></span>
                       </a>

                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item " href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                       </div>
                   </li>
                   @endguest

               {{-- <li><a href="/adminLogin">  <i class="fa fa-user-md"></i>   Admin</a></li> --}}
               {{-- <li><a href="/userLogin">   <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li> --}}
               {{-- <li><a href="/userRegister"><i class="fa fa-user-plus" aria-hidden="true"></i>  Register</a></li> --}}
             </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
 



      <!-- Page Content -->
      <div class="container" style="margin-top:70px;">
        <!-- Page Heading/Breadcrumbs -->
              <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header  text-primary">About
                          <small>Blood Bank</small>
                      </h1>
                      {{-- <ol class="breadcrumb">
                          <li><a href="/home">Home</a>
                          </li>
                          <li class="active">About</li>
                      </ol> --}}
                  </div>
              </div>
              <!-- /.row -->
      
              <!-- Intro Content -->
              <div class="row">
                  <div class="col-md-4">
                      <img class="img-responsive" src="images/contact.jpg" alt="">
                  </div>
                  <div class="col-md-8">
                      <h2 class="text-primary">About Blood Bank</h2>
                      <p>Blood banking is the process that takes place in the laboratory to ensure that donated blood,
                           or blood products,are safe before they are used in blood transfusions and other medical procedures. 
                           Blood banking includes typing the blood for transfusion and testing for infectious diseases.
                           The term "blood bank" typically refers to a division of a hospital 
                           where the storage of blood product occurs and where proper testing is performed 
                           (to reduce the risk of transfusion related adverse events). However, it sometimes refers to a collection center, 
                           and indeed some hospitals also perform collection.
                      </p>
                      
                  </div>
              </div>
              <!-- /.row -->
      
      
              <hr>
              <p class='text-center'>Copyright &copy; bloodbank.com</p>

      
          </div>
          <!-- /.container -->
      
          <!-- jQuery -->
          <script src="js/jquery.js"></script>
      
          <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
      

</body>
</html>