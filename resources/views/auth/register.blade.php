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
                <li><a href="{{ url('/') }}"> <i class="fa fa-home"></i> Home</a></li>
                <li><a href="/aboutUs">     <i class="fa fa-users"></i>   About us</a></li>
                <li><a href="/home#news">       <i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
                <li><a href="/contactUs">   <i class="fa fa-envelope"></i>  Contact us</a></li>
                {{-- <li><a href="/adminLogin">  <i class="fa fa-user-md"></i>   Admin</a></li> --}}
                <li><a href="{{ route('login') }}">   <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
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
                        <h2 class="page-header text-primary"> Donate to save life </h2>
                    </div>
                    
					<form role="form" action={{route('Register')}} method="post">
                        {{ csrf_field() }} 
			    	  	<div class="form-group col-md-6">
							 <label for="user_name" class="text-primary">User Name</label>
			    		     <input class="form-control" name="name"  id="user" type="text" required>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Avilable</label>
                            <select class="form-control " name="active" >
                                <option selected  value="1">Active</option>
                                <option value="0">Not Active</option>
                            </select>
                       </div>
                     

                       <div class="form-group col-md-12">
                        <label for="email"  class="text-primary" >Email</label>
                        <input type="email" class="form-control" id="email" name="email" >
                   </div>


                       <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Phone Number</label>
                            <input class="form-control" name="phone"  id="phone" type="number" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Blood Category</label>
                            <select class="form-control" name="category" >

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
                            <select class="form-control" name  ="country" >



                                <?php

                                $curl = curl_init();
                                
                                curl_setopt_array($curl, array(
                                    CURLOPT_URL => "https://countries-cities.p.rapidapi.com/location/country/list?format=json",
                                    CURLOPT_RETURNTRANSFER => true,
                                    CURLOPT_FOLLOWLOCATION => true,
                                    CURLOPT_ENCODING => "",
                                    CURLOPT_MAXREDIRS => 10,
                                    CURLOPT_TIMEOUT => 30,
                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                    CURLOPT_CUSTOMREQUEST => "GET",
                                    CURLOPT_HTTPHEADER => array(
                                        "x-rapidapi-host: countries-cities.p.rapidapi.com",
                                        "x-rapidapi-key: f395975d9cmshb729a9c28f3f76dp12080djsnb34d53145864"
                                    ),
                                ));
                                
                                $response = curl_exec($curl);
                                $err = curl_error($curl);
                                
                                curl_close($curl);
                                
                                if ($err) {
                                    echo "cURL Error #:" . $err;
                                } else {
                                    $countries = json_decode($response);
                            
                                }
                                
                                ?>
                                   
                                    



                                   <option selected  value=" ">           Select Country        </option>

                                @foreach ($countries->countries as $key => $v) 
                                        <option   value="Lebanon"  >   {{$v}}    </option>
                                @endforeach
                                 {{-- <option selected  value="Lebanon">Lebanon</option>
                                 <option value="Syria">Syria</option>
                                 <option value="Syria">Syria</option>
                                 <option value="Syria">Syria</option> --}}
                            </select>

                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="user_name" class="text-primary">Select City</label>
                            <select class="form-control" name  ="city" >
                                <option selected  value=" ">           Select City        </option>
                                <option           value="Beirut">      Beirut        </option>
                                <option           value="Zahle">        Zahle         </option>
                                <option           value="West Bekaa">   West Bekaa    </option>
                                <option           value="Rachaya">      Rachaya       </option>
                                <option           value="Hasbaya">      Hasbaya       </option>
                                <option           value="Bent Jbail">   Bent Jbail    </option>
                                <option           value="Marjaayoun">   Marjaayoun    </option>
                                <option           value="Sour">         Sour          </option>
                                <option           value="Saida">        Saida         </option>
                                <option           value="Nabatiye">     Nabatiye      </option>
                                <option           value="Chouf">        Chouf         </option>
                                <option           value="Aley">         Aley          </option>
                                <option           value="Baabda">       Baabda        </option>
                                <option           value="Elmatn">       Elmatn        </option>
                                <option           value="Akkar">        Akkar         </option>
                                <option           value="Zgharta">      Zgharta       </option>
                                <option           value="Hermel">       Hermel        </option>
                                <option           value="Baalbek">      Baalbek       </option>
                                <option           value="Kesrouan">     Kesrouan      </option>
                                <option           value="Kesrouan">     Kesrouan      </option>
                            </select>
                        </div>

			    		<div class="form-group col-md-6">
							<label for="pass" class="text-primary">Password</label>
			    			<input class="form-control" id="pass" name="password" type="password" value="" required>
                        </div>
                        
                        <div class="form-group col-md-6">
							<label for="pass" class="text-primary">Confirm Password</label>
			    			<input class="form-control" id="pass" name="password" type="password" value="" required>
			    		</div>
						
                        {{-- <div>            
                            <input type="checkbox" checked data-toggle="toggle" data-on="Active" data-off="Not Active" data-onstyle="success" data-offstyle="danger">                    </div>
                        </div>   --}}
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-block"> Donate</button>
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