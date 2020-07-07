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
               <li><a href="/home">        <i class="fa fa-home"></i> Home</a></li>
               <li><a href="/aboutUs">     <i class="fa fa-users"></i>   About us</a></li>
               <li><a href="/#news">       <i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
               <li><a href="/contactUs">   <i class="fa fa-envelope"></i>  Contact us</a></li>


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
		<div class="col-sm-12">
            <hr>  

         
           <h3> Donors</h3><hr>  


           
       
        <div class ="table-responsive">
            <table class="table    table-bordered table-dark table-hover"
            style="
            text-align: center !important;                           
          
           "
           }
            >

                <thead  >
                    <tr class="bg-danger" 
                        style="
                         text-align: center !important;                           
                        color:white !important;
                        background-color:#FF0006; 
                        "
                        } >
                            {{-- <th >ID            </th> --}}
                            <th >Name          </th>
                            <th >Phone Number  </th>
                            <th >Category      </th>
                            <th >Country       </th>
                            <th >City          </th>
                            <th >Active        </th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($users as $user)
                    <tr>
                    {{-- <th scope="row">{{$user->id}}</th> --}}
                        <td><h5 class= "text-info ">{{$user->name}}     </h5></td>
                        <td><h5 class= "text-danger">{{$user->phone}}   </h5></td>
                        <td><h5 class= "text-info">{{$user->category}}  </h5></td>
                        <td><h5 class= "text-info">{{$user->country}}   </h5></td>
                        <td><h5 class= "text-info">{{$user->city}}      </h5></td>
                        {{-- <td><h5 class= "text-success">{{$user->active}} </h5></td> --}}         
                        <td>  @if($user->active==1 ) <h5 class= "text-success">Active </h5>@endif   </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

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