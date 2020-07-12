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
                         
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} </a>
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
  

<!-- Donate area -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
         <div class="row">

              

              <div class="col-md-6 col-sm-6">
                   <!-- Search FORM HERE -->
                   <form id="appointment-form" role="search" method="post" action="{{action('SearchController@search')}}">
                    {{ csrf_field() }}
                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             <h2>Fine Donor</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                        
                             <div class="col-md-12 col-sm-12">
                              <label for="select" >Select Coutry</label>
                              <select class="form-control" name  ="country" >

                                   {{-- <option value="USA">USA</option> --}}





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
            //    foreach ($countries->countries as $key => $v) {
            //    echo $v.'<br/>';
    
            }
            
            ?>
                                       
                            @foreach ($countries->countries as $key => $v) 
                    
                                    <option selected  value="Lebanon">   {{$v}}    </option>
                            @endforeach



                                   
                                 
                              </select>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <label for="select" >Select City</label>
                                   <select class="form-control" name  ="city" >

                                        <option selected  value="Beirut">Beirut</option>
                                        <option value="Damascus">Damascus</option>
                                   
                                   </select>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <label for="select" >Select Gategory</label>
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
                         
                              <div class="col-md-12col-sm-12">
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Search</button>
                              </div>
                        </div>
                  </form>
              </div>

          <div class="col-md-6 col-sm-6">
               <img src="images/search.jpg" class="img-responsive" alt="">
          </div>    

         </div>
    </div>
</section>


</body>
</html>