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




 <!-- Page Content -->
 <div class="container" style="margin-top:70px;">

    <div class="row">
        <div class="col-md-8">
        <?php
            if(isset($_POST["submit"]))
            {
             $sql="INSERT INTO messages (NAME, CONTACT, EMAIL, MESSAGE, STATUS,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
                if($con->query($sql))
        {
            echo '
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Your message has been Successfully sent.
            </div>
            
            
            ';
        }
            }
        ?>

        <h3 class='text-primary'>Send us a Message</h3>
        <form method="post" action="contact.php" role="form" >
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" name="name" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" name="phone" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" name="email"  >
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" name="submit"><i class='fa fa-send'></i> Send Message</button>
        </form>
        
    </div>
    
    <div class="col-md-4">
        <h3 class='text-primary'>Contact Details</h3>
        {{-- <p>
            Blood Bank &amp; <br>Friend Medical Trust, <br>
            34/44 ,Cherry Street,<br>
            Nethimedu-627813.<br>
            Salem Dt.
        </p> --}}
        <p><i class="fa fa-phone"></i> 
            <abbr title="Phone">P</abbr>: 00961 70 035 057</p>
        <p><i class="fa fa-envelope-o"></i> 
            <abbr title="Email">E</abbr>: <a href="#" >mr.behaajumaa@gmail.com</a>
        </p>
        <p><i class="fa fa-clock-o"></i> 
            <abbr title="Hours">H</abbr>: 24*7</p>
        <p><i class="fa fa-globe"></i> 
            <abbr title="Website">W</abbr>: <a href="index.php">www.bloodbank.org</a></p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li>
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
            </li>
        </ul>
    </div>
</div>


<hr>
<p class='text-centercenter'>Copyright &copy; bloodbank.com</p>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>



</body>
</html>