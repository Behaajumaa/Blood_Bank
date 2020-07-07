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
     <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

 
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

           
            
			<div class="row">
                {{-- <div class="col-md-3"></div> --}}
                <div class="col-md-6">
                    <img class="img-responsive" src="images/appointment-image.jpg" alt="">
                </div>

                
				<div class="col-md-6">
            
                    <div class="col-lg-12">
                        <h2 class="page-header text-primary"> Update Your Profile </h2>
                    </div>
					<form role="form" action="admin.php" method="post">
			    	  	<div class="form-group col-md-6">
							 <label for="user_name" class="text-primary">User Name</label>
			    		     <input class="form-control" name="user"  id="user" type="text" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Phone Number</label>
                            <input class="form-control" name="phone"  id="phone" type="text" required>
                        </div>

                       <div class="form-group col-md-12">
                        <label for="email"  class="text-primary" >Email</label>
                        <input type="email" class="form-control" id="email" name="email" >
                   </div>


                       

                        <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Blood Category</label>
                            <select class="form-control" name  ="category" >

                                 <option selected  value="A+">A+</option>
                                 <option value="B+">B+</option>
                                 <option value="AB+">AB+</option>
                                 <option value="O+">O+</option>
                                 <option value="O-">O-</option>
                                 <option value="A-">A-</option>
                                 <option value="B-">B-</option>
                                 <option value="AB-">AB-</option>

                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Select Country</label>
                            <select class="form-control" name  ="category" >
                                 <option selected  value="Lebanon">Lebanon</option>
                                 <option value="Syria">Syria</option>
                                 <option value="Syria">Syria</option>
                                 <option value="Syria">Syria</option>
                            </select>

                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Select City</label>
                            <select class="form-control" name  ="category" >
                                 <option selected  value="Beirut">Beirut</option>
                                 <option value="Damascus">Damascus</option>
                                 <option value="Damascus">Damascus</option>
                                 <option value="Damascus">Damascus</option>
                                 <option value="Damascus">Damascus</option>
                            </select>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Availability</label>
                            <select class="form-control" name  ="category" >
                                 <option selected  value="Active">Active</option>
                                 <option value="Not Active"><p class='text-danger'></p>Not Active</option>
                          
                            </select>
                        </div>

			    	
                       
                        
                        <button type="button" class="btn btn-primary btn-lg btn-block"> Save</button>
			      	</form>
				</div>
				
			</div>
        </div>



       

     
  
        </div>

         <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     {{-- <script src="js/jquery.sticky.js"></script> --}}
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

     <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

</body>
</html>