<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">



    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>
    

<!-- Donate area -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
         <div class="row">

              

              <div class="col-md-6 col-sm-6">
                   <!-- Search FORM HERE -->
                   <form id="appointment-form" role="form" method="POST" action="insert.php">

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             <h2>Fine Donor</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <div class="col-md-6 col-sm-6">
                                  {{-- <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"> --}}
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  {{-- <label for="email">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"> --}}
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  {{-- <label for="date">Select Date</label>
                                  <input type="date" name="date" value="" class="form-control"> --}}
                             </div>

                            

                             <div class="col-md-12 col-sm-12">
                              <label for="select" >Select Coutry</label>
                              <select class="form-control" name  ="category" >

                                   <option selected  value="Lebanon">Lebanon</option>
                                   <option value="USA">USA</option>
                                   <option value="syria">Syria</option>
                                   <option value="Egypt">Egypt</option>
                                   <option value="canada">Canada</option>
                                  
                              </select>
                         </div>

                         <div class="col-md-12 col-sm-12">
                              <label for="select" >Select City</label>
                              <select class="form-control" name  ="category" >

                                   <option selected  value="Lebanon">Beirut</option>
                                   <option value="Damascus">Damascus</option>
                                   <option value="Aleppo">Aleppo</option>
                                   <option value="Cairo">Cairo</option>
                                   <option value="Zahle">Zahle</option>
                                  
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