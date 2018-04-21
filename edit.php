<?php
session_start();
$user_id = $_SESSION['userid'];
$courseId = $_GET["id"];
$db = mysqli_connect('localhost','root', '', 'isdm');

// IN (SELECT schedule_id FROM user_courses WHERE user_id = '$user_id')"
$sql = "SELECT * FROM schedule WHERE schedule_id IN (SELECT schedule_id FROM user_courses WHERE course_id=$courseId)";
// IN (SELECT course_id FROM user_courses WHERE user_id = '$user_id')";
$query = "SELECT * FROM courses WHERE course_id = $courseId";
$record = mysqli_query($db, $sql);
$result = mysqli_query($db, $query);

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
      .jumbotron {
          background-color: #f4511e; /* Orange */
          color: #ffffff;
        }
    </style>

    <title>Edit course</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><b>COURSTRON</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="1Home.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li>
              <a class="nav-link" href="2Dashbard.php">Dashboard<span class="sr-only">(current)</span></a>
            </li>

          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
              <a class="nav-link" href="contactus.html"> ContactUs <span class="sr-only">(current)</span></a>
            </li>
            <li>
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
        </ul>
        </div>
    </nav>

      <section class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Add Course</h1>
          <p>Course information for adding a new course</p>
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
        </div>
      </section>

<!--
      <div class="container">
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Please sign in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 text-center">
                      <img class="mb-4" src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/unlock-icon.png" alt="" width="100" height="100">

                      <form action="test.php" method="post">
                        <div class="form-group">
                          <label for="username" class="sr-only">Username</label>
                          <input type="text" class="form-control" placeholder="Username" id="username">
                          <br>
                          <label for="password" class="sr-only">Password</label>
                          <input type="password" class="form-control" placeholder="Password" id="password" required>
                          <br>
                          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </div>
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
                <h5 class="modal-title" id="ModalLongTitle">Please Register</h5>
                <button type="button" class="close" data-dismiss="model" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 text-center">
                      <img class="mb-4" src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/unlock-icon.png" alt="" width="100" height="100">

                      <form action="test.php" method="post">
                        <div class="form-group">
                          <label for="username" class="sr-only">First</label>
                          <input type="text" class="form-control" placeholder="Username" id="username">
                          <br>
                          <label for="password" class="sr-only">Password</label>
                          <input type="password" class="form-control" placeholder="Password" id="password" required>
                          <br>
                          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <?php
         while($row = mysqli_fetch_assoc($record))
         {
         $str = '<div class="container">
         <div class="col-lg-12 well">
            <div class="row">
              <form action="" method="post">
                <div class="col-sm-12">
                  <div class="row">
                    <!--Course Name-->
                    <div class="col-sm-6 form-group">
                      <label>Course Name</label>
                      <input type="text" placeholder="  " class="form-control" name="coursename" id="coursename"  required/>
                    </div>
                    <!--Course ID-->
                    <div class="col-sm-6 form-group">
                      <label>Course ID </label>
                      <input type="text" placeholder="  " class="form-control" name="courseid" id="courseid" value=echo $courseID required/>
                    </div>

                    <div class="col-sm-6 form-group">
                      <label>Schedule ID </label>
                      <input type="text" placeholder="  " class="form-control" name="scheduleid" id="scheduleid" required/>
                    </div>
                  </div>
                  <!--Course Description-->
                  <div class="form-group">
                    <label>Course Description</label>
                    <textarea placeholder="   " rows="3" class="form-control" name="coursedesc" id="coursedesc" required></textarea>
                  </div>
                  <!--Objectives-->
                  <div class="row">
                    <div class="col-sm-4 form-group">
                      <label>Objectives</label>
                      <input type="text" placeholder="Objective 1" class="form-control" name="obj1" id="obj1" required/>
                      <br>
                      <input type="text" placeholder="Objective 2" class="form-control" name="obj2" id="obj2"/>
                      <br>
                      <input type="text" placeholder="Objective 3" class="form-control" name="obj3" id="obj3"/>
                    </div>
                  </div>
                  <!--Instructors  -->
                  <div class="row">
                    <div class="col-sm-4 form-group">
                      <label>Instructor 1</label>
                      <input type="text" placeholder="    " class="form-control" name="instructor1" id="instructor1" required/>
                    </div>

                    <div class="col">
                      <div class="col-sm-12 form-group">
                        <label>Instructor 2</label>
                        <input type="text" placeholder="    " class="form-control" name="instructor2" id="instructor2" />
                      </div>
                    </div>

                    <div class="col">
                      <div class="col-sm-12 form-group">
                        <label>Instructor 3</label>
                        <input type="text" placeholder="    " class="form-control" name="instructor3" id="instructor3" />
                      </div>
                    </div>
                  </div>
                  <!--Languages-->
                  <div class="dropdown">
                    <div class="col-sm-8 form-group">
                      <label>Language</label>
                      <select placeholder="Choose one of the following" id="language" name="language" class="form-control" required="required">
                        <option value=" ">  </option>
                        <option value="English">English</option>
                        <option value="Thai">Thai</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>


                  <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div> -->

                  <div class="form-group" id="subject_others" name="subject_others" />
                    <label>Others</label>
                    <div class="col-sm-6">
                      <input class="form-control" type="text"></input>
                    </div>
                  </div>
                  <br>
                  <!--Category  -->
                  <div class="form-group">

                    <div class="col-sm-8 form-group">
                      <label>Category</label>
                      <select id="subject" name="subject" class="form-control" required="required">
                        <option value=" ">  </option>
                        <option value="General">General</option>
                        <option value="Science">Science</option>
                        <option value="IT">IT</option>
                        <option value="Management">Management</option>
                        <option value="Finance">Finance </option>
                        <option value="Food And Agriculture ">Food And Agriculture   </option>
                        <option value="Nanotechnology">Nanotechnology  </option>
                        <option value="Energy">Energy  </option>
                        <option value="Mechatronics">Mechatronics  </option>
                      </select>
                      <br><br>
                      <input type="submit" class="btn btn-lg btn-info"  value="Submit" />

                    </div>
                  </div>
                  <br><br>
                  <!-- <input type="submit" class="btn btn-lg btn-info"  value="Submit" /> -->
                  <br><br>
                </div>
              </form>
            </div>
          </div>';

?>


   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Libraries -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>

    <!-- Custom -->
<!--// -->
    <script>
      $(document).ready(function () {
          var $language_control = $("#subject_others");
          $language_control.hide();
          var $language_selection = $("#language");

          $language_selection.change(function() {
            if ($language_selection.val() == "Others") {
              $language_control.show();
            } else {
              $language_control.hide();
            }
          })
      });
    </script>
<?php
  </body>
</html>
?>
