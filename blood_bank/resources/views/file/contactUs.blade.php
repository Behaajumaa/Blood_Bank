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
   

    <


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
            <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat fa-lg"></i> Blood Bank</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/home"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/aboutUs"><i class="fa fa-users"></i> About us</a></li>
                <li><a href="Donor_reg.php"><i class="fa fa-briefcase"></i> Services</a></li>
                <li><a href="/contactUs"><i class="fa fa-envelope"></i> Contact us</a></li>
                <li><a href="admin.php"><i class="fa fa-user-md"></i> Admin</a></li>
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
        <p>
            Blood Bank &amp; <br>Friend Medical Trust, <br>
            34/44 ,Cherry Street,<br>
            Nethimedu-627813.<br>
            Salem Dt.
        </p>
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