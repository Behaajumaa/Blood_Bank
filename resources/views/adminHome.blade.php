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

     <link  href="/css/bootstrap.min.css"                rel="stylesheet">
     <link  href="/css/font-awesome.min.css"             rel="stylesheet" >
     <link  href="/css/animate.css"                      rel="stylesheet">
     <link  href="/css/owl.carousel.css"                 rel="stylesheet">
     <link  href="/css/owl.theme.default.min.css"        rel="stylesheet">
     <link href="/css/modern-business.css"               rel="stylesheet">
     <link href="/css/jquery-ui.css"                     rel="stylesheet">
     <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
     rel="stylesheet"  type='text/css'>

     
     <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="/css/tooplate-style.css">

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
               <li><a href="/home">        <i class="fa fa-home"></i> Home</a></li>
               <li><a href="/aboutUs">     <i class="fa fa-users"></i>   About us</a></li>
               <li><a href="/#news">       <i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
               <li><a href="/contactUs">   <i class="fa fa-envelope"></i>  Contact us</a></li>
               <li><a href="/searchForm">   <i class="fa fa-search" aria-hidden="true"></i>  Search</a></li>


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
 
<div class="container">
	<div class="row">
		<div class="col-sm-3">
            <hr>  

            <h3 class="text-primary"> Dashboard</h3>
            <hr>
            
            <ul class="nav nav-stacked">
                <li><a href="/viewMessage"><i class="fa fa-envelope fa-lg"></i> Inbox </a></li>
                {{-- <li><a href="admin_donor.php"><i class="fa fa-search fa-lg"></i>Search Donors</a></li> --}}
                <li><a href="/viewDonors"><i class="fa fa-users fa-lg text-success"></i>  Donors</a></li>
                {{-- <li><a href="admin_ndonor.php"><i class="fa fa-users fa-lg text-danger"></i> Not Active Donors</a></li> --}}
                {{-- <li><a href="admin_need_blood.php"><i class="fa fa-bed fa-lg"></i> Need Blood</a></li> --}}
                <hr>
                {{-- <li><a href="#add" data-toggle="collapse" ><i class="fa fa-cogs fa-lg"></i> Settings</a></li>
                <ul class="nav collapse" id="add">
                    <li><a href="admin_country.php"><i class="fa fa-plus fa-lg"></i> Add Country</a>
                    <li><a href="admin_state.php"><i class="fa fa-plus fa-lg"></i> Add State</a></li>
                    <li><a href="admin_city.php"><i class="fa fa-plus fa-lg"></i> Add City</a></li>
                    <li><a href="admin_area.php"><i class="fa fa-plus fa-lg"></i> Add Area</a></li>
                    </li>
                </ul> --}}
            </ul>
            

        </div>
		<div class="col-sm-9" >
            <h3><hr>
                {{-- <i class="fa fa-tint fa-lg text-danger" aria-hidden="true"></i> --}}
            Donors</h3><hr>  
                
                 
            
        <div class ="table-responsive">
            <table class="table table-striped  table-dark table-hover">
                <thead >
                    <tr class="bg-danger">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">phone Number</th>
                    <th scope="col">Category</th>
                    <th scope="col">Date</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Active</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td >Mark</td>
                    <td>70035057</td>
                    <td>A+</td>
                    <td>20/06/2020</td>
                    <td>Lebanon</td>
                    <td>Zahle</td>
                    <td><h5 class= "text-success">Active</h5></td>

                   
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td >Bahaa</td>
                        <td>70035057</td>
                        <td>AB-</td>
                        <td>20/06/2020</td>
                        <td>USA</td>
                        <td>NEW YOURK</td>
                        <td><h5 class= "text-danger">Not Active</h5></td>

                       
                    </tr> 
                    <tr>
                            <th scope="row">3</th>
                            <td >Sami</td>
                            <td>76635057</td>
                            <td>O+</td>
                            <td>23/06/2020</td>
                            <td>Syria</td>
                            <td>Damascus</td>
                            <td><h5 class= "text-success">Active</h5></td>



                             
                    </tr>
                </tbody>
            </table>

        </div>

		</div>
	</div>
</div>


  <!-- SCRIPTS -->
  <script src="/js/jquery.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  {{-- <script src="js/jquery.sticky.js"></script> --}}
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/wow.min.js"></script>
  <script src="/js/smoothscroll.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/custom.js"></script>

  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

	</body>
</html>