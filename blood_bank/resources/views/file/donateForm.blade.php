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
                   <img src="images/appointment-image.jpg" class="img-responsive" alt="">
              </div>

              <div class="col-md-6 col-sm-6">
                   <!-- Donate FORM HERE -->
                   <form id="appointment-form" role="form" method="POST" action="insert.php">

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             <h2>Be Hero and save a Life</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <div class="col-md-6 col-sm-6">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="date">Select Date</label>
                                  <input type="date" name="date" value="" class="form-control">
                             </div>

                             <div class="col-md-6 col-sm-6">
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


                             <div class="col-md-6 col-sm-6">
                                  <label for="name">City</label>
                                  <input type="text" class="form-control"  name="city" placeholder="Add youe city">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                   <label for="telephone">Phone Number</label>
                                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                             </div>

                             <div class="col-md-12col-sm-12">
                                  <button type="submit" class="form-control" id="cf-submit" name="submit">Add your donate record</button>
                             </div>
                        </div>
                  </form>
              </div>

         </div>
    </div>
</section>


</body>
</html>