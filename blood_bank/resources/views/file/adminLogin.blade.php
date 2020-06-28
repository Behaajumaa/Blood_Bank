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
     <title>adminLogin</title>

     <link  href="css/bootstrap.min.css"          rel="stylesheet">
     <link  href="css/font-awesome.min.css"       rel="stylesheet">
     <link  href="css/animate.css"                rel="stylesheet">
     <link  href="css/owl.carousel.css"           rel="stylesheet">
     <link  href="css/owl.theme.default.min.css"  rel="stylesheet">
     <link  href="css/modern-business.css"        rel="stylesheet">
     <link  href="css/jquery-ui.css"              rel="stylesheet">
     <link  href="css/font-awesome.min.css"       rel="stylesheet">
     
     <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
     rel="stylesheet"  type='text/css'>

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
               <li><a href="/home#news">       <i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
               <li><a href="/contactUs">   <i class="fa fa-envelope"></i>  Contact us</a></li>
               {{-- <li><a href="/adminLogin">  <i class="fa fa-user-md"></i>   Admin</a></li> --}}
               <li><a href="/userLogin">   <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
               <li><a href="/userRegister"><i class="fa fa-user-plus" aria-hidden="true"></i>  Register</a></li>
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
                <h2 class="page-header text-primary"> <i class="fa fa-male" aria-hidden="true"></i> Admin Login
                </h2>
            </div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<?php
				if(isset($_POST["submit"]))
					{
						if($_POST["user"]=="admin"&&$_POST["pass"]=="admin")
						{
							 $_SESSION['usertype'] ='admin';
							 $_SESSION['username']='admin';
							
							header("location:admin_inbox.php");
						}
						else
						{
							echo "<div class='alert alert-danger'><b>Error</b> User Name and Password Incorrect.</div>";
						}
					}
				?>
					<form role="form" action="admin.php" method="post">
			    	  	<div class="form-group">
							 <label for="user_name" class="text-primary">User Name</label>
			    		    <input class="form-control" name="user"  id="user" type="text" required>
			    		</div>
			    		<div class="form-group">
							<label for="pass" class="text-primary">Password</label>
			    			<input class="form-control" id="pass" name="pass" type="password" value="" required>
			    		</div>
						
						
                        <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-sign-in"></i> Login Here</button>
			      	</form>
				</div>
			</div>
        </div>
        <!-- /.row -->


       

     
  
        </div>


</body>
</html>