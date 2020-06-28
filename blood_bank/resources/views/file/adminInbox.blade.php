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
        <link rel="stylesheet" href="css/tooplate-style.css">	</head>
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
                           <li><a href="/adminLogin">  <i class="fa fa-user-md"></i>   Admin</a></li>
                           <li><a href="/userLogin">   <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                           <li><a href="/userRegister"><i class="fa fa-user-plus" aria-hidden="true"></i>  Register</a></li>
                         </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                 </div>
                 <!-- /.container -->
             </nav>
               
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
        <!-- /Admin side nav -->
        <h3 class="text-primary"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>
<hr>

<ul class="nav nav-stacked">
	<li><a href="admin_inbox.php"><i class="fa fa-envelope fa-lg"></i> Inbox </a></li>
	<li><a href="admin_donor.php"><i class="fa fa-search fa-lg"></i>Search Donors</a></li>
	<li><a href="admin_adonor.php"><i class="fa fa-users fa-lg text-success"></i> Active Donors</a></li>
	<li><a href="admin_ndonor.php"><i class="fa fa-users fa-lg text-danger"></i> Not Active Donors</a></li>
	<li><a href="admin_need_blood.php"><i class="fa fa-bed fa-lg"></i> Need Blood</a></li>
	<hr>
	<li><a href="#add" data-toggle="collapse" ><i class="fa fa-cogs fa-lg"></i> Settings</a></li>
	<ul class="nav collapse" id="add">
		<li><a href="admin_country.php"><i class="fa fa-plus fa-lg"></i> Add Country</a>
		<li><a href="admin_state.php"><i class="fa fa-plus fa-lg"></i> Add State</a></li>
		<li><a href="admin_city.php"><i class="fa fa-plus fa-lg"></i> Add City</a></li>
		<li><a href="admin_area.php"><i class="fa fa-plus fa-lg"></i> Add Area</a></li>
		</li>
	</ul>
</ul>

<hr>
        <!-- / end Admin side nav -->



        </div>
		<div class="col-sm-9" >
			<h3 class="text-primary"><i class="fa fa-envelope"></i> Inbox </h3><hr>    
			

		</div>
	</div>
</div>
	</body>
</html>