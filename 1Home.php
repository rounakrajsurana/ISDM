<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">



    <title>Online course support System</title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
.jumbotron {
    background-color: #f4511e; /* Orange */
    color: #ffffff;
}


   /* Remove the navbar's default margin-bottom and rounded borders */
   .navbar {
     margin-bottom: 0;
     border-radius: 0;
   }


   /* Add a gray background color and some padding to the footer */
   footer {
     background-color: #f2f2f2;
     padding: 25px;
   }

 .carousel-inner img {
     width: 100%; /* Set width to 100% */
     margin: auto;
     min-height:200px;

 }

 /* Hide the carousel text when the screen is less than 600 pixels wide */
 @media (max-width: 600px) {
   .carousel-caption {
     display: none;
   }
 }

</style>
  </head>
  <body>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <!-- Libraries -->
     <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
     <script src="https://d3js.org/d3.v4.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="1Home.php"><b>COURSTRON</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="1Home.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fas fa-columns"></i> Dashboard<span class="sr-only">(current)</span></a>
            </li>
			      <li>
			        <a class="nav-link" href="contactus.html"><i class="fas fa-phone-square"></i> ContactUs <span class="sr-only">(current)</span></a>
            </li>

          </ul>
          <?php
           $str = '<ul class="nav navbar-nav navbar-right">
          <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Log in
          </button>
          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ModalCenter">
        Register
          </button>';

          session_start();
          if(isset($_SESSION['userid'])){
            $str = '<ul class="nav navbar-nav navbar-right">
           <button type="button" class="btn btn-outline-primary" data-target="#exampleModalCenter">
             <a href="logout.php">Logout</a>
           </button>';
          }
          echo $str;
          ?>
        </ul>
      </div>


   </nav>


   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLongTitle">Please Sign In</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">

             <span aria-hidden="true">&times;</span>

           </button>
         </div>
         <div class="modal-body">
           <div class="container-fluid">
             <div class="row">
               <div class="col-12 text-center">
                 <img class="mb-4" src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/unlock-icon.png" alt="" width="100" height="100">


                 <form action="authenticate.php" method="post">
                   <div class="form-group">
                     <label for="username" class="sr-only">Username</label>
                     <input type="text" class="form-control" placeholder="Username" id="username" name ="username" required/>
                     <br>
                     <label for="password" class="sr-only">Password</label>
                     <input type="password" class="form-control" placeholder="Password" id="password" name="password" required/>
                     <br>
                     <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                   </div>

				               <div class="help-block text-right"><a href="forgetpassword.html">Forget password ?</a></div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalCenterTitle">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center">
                <img class="mb-4" src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/unlock-icon.png" alt="" width="100" height="100">
                <form action="register.php" method="post">
                  <div class="form-group">
                    <label for="Username" class="sr-only">Username</label>
                    <input type="text" class= "form-control" placeholder="Username" id ="username" name="username" required />
                    <br>
                    <label for="email" class="sr-only">Email ID</label>
                    <input type="text" class="form-control" placeholder="Email" id = "email" name="email" required />
                    <br>
                    <label for="password"  class="sr-only">Password</label>
                    <input type="password" value="" class="form-control" placeholder="Password" id = "password_1" name="password_1" required />
                    <br>
                    <label for="password" class="sr-only">Confirm Password</label>
                    <input type="password" value="" class="form-control" placeholder="Retype Password" id = "password_2" name="password_2" required />
                    <br>
                    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign Up">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron jumbotron-fluid text-center">
      <!-- <h1>COURSTRON</h1> -->
      <img src="logo.png">
      <p>We specialize in designing Courses</p>
    </div>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="dsc1.jpg" alt="Image" height = "350">
            <div class="carousel-caption">
              <h3>Enhancing teaching</h3>
              <p>Power of knowledge</p>
            </div>
          </div>

          <div class="item">
            <img src="dsc02crop.jpg" alt="Image" style="width:50%">
            <div class="carousel-caption">
              <h3>Improve Learning</h3>
              <p>Smarter youth</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container text-center">
      <h3>What We Do</h3><br>
      <div class="row">
        <div class="col-sm-4">
          <img src="https://www.collegefactual.com/_dir-static/img/graduation-and-retention/Graduates%20Holding%20Diplomas%20in%20a%20Line.jpg" class="img-responsive" style="width:100%" alt="Image">
          <p>Target Learner</p>
        </div>
        <div class="col-sm-4">
          <img src="https://cft.vanderbilt.edu/wp-content/uploads/sites/59/Blooms-Taxonomy-650x366.jpg" class="img-responsive" style="width:100%" alt="Image">
          <p>Bloom's Taxonomy</p>
        </div>
        <div class="col-sm-4">
          <div class="well">
           <p>Special Thanks to Werapat and Benya </p>
          </div>
          <div class="well">
           <p>Team #4</p>
          </div>
        </div>
      </div>
    </div><br>


<!--Footer-->
<footer class="page-footer font-small indigo pt-0">

<!--Footer Links-->
<div class="container">

<!--First row-->
<div class="row">

<!--First column-->
<div class="col-md-12 py-5">

<div class="mb-5 flex-center">

<!--Facebook-->
<a class="fb-ic">
  <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<!--Twitter-->
<a class="tw-ic">
  <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<!--Google +-->
<a class="gplus-ic">
  <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<!--Linkedin-->
<a class="li-ic">
  <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<!--Instagram-->
<a class="ins-ic">
  <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
</a>
<!--Pinterest-->
<a class="pin-ic">
  <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
</a>
</div>
</div>
<!--/First column-->
</div>
<!--/First row-->
</div>
<!--/Footer Links-->

<!--Copyright-->
<div class="footer-copyright py-3 text-center">
© 2018 Copyright: AIT
</div>
<!--/Copyright-->

</footer>
<!--/Footer-->

  </body>
</html>
