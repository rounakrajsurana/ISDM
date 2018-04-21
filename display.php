<?php
session_start();
$user_id = $_SESSION['userid'];
$courseId = $_GET["id"];
$db = mysqli_connect('localhost','root', '', 'isdm');

// IN (SELECT schedule_id FROM user_courses WHERE user_id = '$user_id')"
$sql = "SELECT * FROM schedule WHERE schedule_id IN (SELECT schedule_id FROM user_courses WHERE course_id=$courseId)";
// IN (SELECT course_id FROM user_courses WHERE user_id = '$user_id')";
$query = "SELECT * FROM courses WHERE course_id = $courseId";
$query2 = "SELECT total_duration, target_learner, problem, statement FROM schedule WHERE schedule_id IN (SELECT schedule_id FROM user_courses WHERE course_id=$courseId)";

$record = mysqli_query($db, $sql);
$scheduleid = mysqli_insert_id($db);

$result = mysqli_query($db, $query); //working

$read = mysqli_query($db, $query2);
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

    <title>Course Page!</title>
<style>
  .jumbotron {
        background-color: #f4511e; /* Orange */
        color: #ffffff;
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


    <!-- Navigation bar -->

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
                    <a class="nav-link" href="2Dashbard.php"><i class="fas fa-columns"></i> Dashboard<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="ADDSCHEDULE.php?id=<?php echo $courseId ?>"><i class="fas fa-clipboard-list"></i> Add Schedule<span class="sr-only">(current)</span></a>
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
      <!-- Container to show the name of the page -->
   <section class="jumbotron text-center">
     <div class="container">
       <h1 class="jumbotron-heading">Course Page</h1>
       <h5 class="jumbotron-heading">Outline of the Course</h5>

     </section>

      <div class="container">

          <div class="col-sm-12" style="background-color:rgb(0, 195, 255);">   COURSE PHASE  </div>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">CourseID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Course Description</th>
                <th scope="col">Learning Outcome</th>
                <th scope="col">Course Objective 1</th>
                <th scope="col">Course Objective 2</th>
                <th scope="col">Course Objective 3</th>
                <th scope="col">Course Instructor 1</th>
                <th scope="col">Course Instructor 2</th>
                <th scope="col">Course Instructor 3</th>
                <th scope="col">Course Langugage</th>
                <th scope="col">Course Category</th>
              </tr>
            </thead>
              <tbody>
                <?php
                while($res = mysqli_fetch_assoc($result)) {

                  echo "<tr>";
                  echo "<td>".$res['course_id']."</td>";
                  echo "<td contenteditable=true>".$res['course_name']."</td>";
                  echo "<td contenteditable=true>".$res['course_description']."</td>";
                  echo "<td contenteditable=true>".$res['learning_outcome']."</td>";
                  echo "<td contenteditable=true>".$res['course_obj1']."</td>";
                  echo "<td contenteditable=true>".$res['course_obj2']."</td>";
                  echo "<td contenteditable=true>".$res['course_obj3']."</td>";
                  echo "<td contenteditable=true>".$res['course_instructor1']."</td>";
                  echo "<td contenteditable=true>".$res['course_instructor2']."</td>";
                  echo "<td contenteditable=true>".$res['course_instructor3']."</td>";
                  echo "<td contenteditable=true>".$res['course_lang']."</td>";
                  echo "<td contenteditable=true>".$res["course_cat"]."</td>";

                  echo "</tr>";
                }
                ?>
            </tbody>
          </table>
          </div>

      <div class="container">
        <div class="col-sm-12" style="background-color:rgb(0, 195, 255);">   ANALYSIS AND DESIGN PHASE </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Topic</th>
              <th scope="col">Bloom's Method</th>
              <th scope="col">Teaching Method</th>
              <th scope="col">Evaluation</th>
              <th scope="col">Duration</th>
            </tr>
          </thead>
          <tbody>
            <?php

            while($row = mysqli_fetch_assoc($record)) {

              echo "<tr>";

              echo "<td contenteditable=true>".$row['topicname1']."</td>";
              echo "<td contenteditable=true>".$row['bm1']."</td>";
              echo "<td contenteditable=true>".$row['tm1']."</td>";
              echo "<td contenteditabl e=true>".$row['evaluation1']."</td>";
              echo "<td contenteditable=true>".$row['duration1']."</td>";

              echo "</tr>";
              echo "<tr>";

              echo "<td contenteditable=true>".$row['topicname2']."</td>";
              echo "<td contenteditable=true>".$row['bm2']."</td>";
              echo "<td contenteditable=true>".$row['tm2']."</td>";
              echo "<td contenteditable=true>".$row['evaluation2']."</td>";
              echo "<td contenteditable=true>".$row['duration2']."</td>";

              echo "</tr>";

              echo "<tr>";
              echo "<td contenteditable=true>".$row['topicname3']."</td>";
              echo "<td contenteditable=true>".$row['bm3']."</td>";
              echo "<td contenteditable=true>".$row['tm3']."</td>";
              echo "<td contenteditable=true>".$row['evaluation3']."</td>";
              echo "<td contenteditable=true>".$row['duration3']."</td>";

              echo "</tr>";

              echo "<tr>";
              echo "<td contenteditable=true>".$row['topicname4']."</td>";
              echo "<td contenteditable=true>".$row['bm4']."</td>";
              echo "<td contenteditable=true>".$row['tm4']."</td>";
              echo "<td contenteditable=true>".$row['evaluation4']."</td>";
              echo "<td contenteditable=true>".$row['duration4']."</td>";

              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
        <div class="container">
          <div class="col-sm-12" style="background-color:rgb(0, 195, 255);"></div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Total Duration</th>
                <th scope="col">Target Learner </th>
                <th scope="col">Problem</th>
                <th scope="col">Solution</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($rec = mysqli_fetch_assoc($read)) {

                echo "<tr>";
                echo "<td contenteditable=true>".$rec['total_duration']."</td>";
                echo "<td contenteditable=true>".$rec['target_learner']."</td>";
                echo "<td contenteditable=true>".$rec['problem']."</td>";
                echo "<td contenteditable=true>".$rec['statement']."</td>";
                echo "</tr>";
              }
               ?>
             </tbody>
           </table>
           <form action="createpdf.php?id=<?php echo $courseId;?>" method="post">
             <input type="submit" class="btn btn-success" value="EXPORT"  />
           </form>
         </div>

      </div>
<br>
<br>

<!-- <ul class="nav nav-pills" id="pills-tab" role="tablist" >
    <li class="nav-item">
      <a class="nav-link active" href="ADDSCHEDULE.html" >Export</a>
    </li>
  </ul> -->


  </body>
</html>
