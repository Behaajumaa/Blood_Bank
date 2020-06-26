<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>
<body>
    

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
            <a class="navbar-brand" href="index.php"> Blood Bank</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/home">         Home</a></li>
              <li><a href="/aboutUs">      About us</a></li>
              <li><a href="/Donor">        News</a></li>
              <li><a href="/contactUs">    Contact us</a></li>
              <li><a href="/admin.php">    Admin</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

    <!-- Navigation -->
   

    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary"><i class='fa fa-user-md'></i> Admin Login
                  
                </h1>
              
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
						
						
			    		<button class="btn btn-primary pull-right" name="submit" type="submit"><i class="fa fa-sign-in"></i> Login Here</button>
			      	</form>
				</div>
				<div class="col-md-3"></div>
			</div>
        </div>
        <!-- /.row -->


       

     
  
        </div>


</body>
</html>