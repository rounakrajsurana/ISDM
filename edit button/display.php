<?php
session_start();

if(isset($_SESSION['id'])){
  $user_id=($_SESSION['userid']);
  $user_id=($_SESSION['id']);
}

// $user_id = $_SESSION['userid'];
$courseId = $_GET["id"];
$db = mysqli_connect('localhost','root', '', 'isdm');

// IN (SELECT schedule_id FROM user_courses WHERE user_id = '$user_id')"
$sql = "SELECT * FROM schedule WHERE schedule_id IN (SELECT schedule_id FROM user_courses WHERE course_id=$courseId)";
// IN (SELECT course_id FROM user_courses WHERE user_id = '$user_id')";
$query = "SELECT * FROM courses WHERE course_id = $courseId";
$query2 = "SELECT total_duration, problem, statement FROM schedule WHERE schedule_id IN (SELECT schedule_id FROM user_courses WHERE course_id=$courseId)";
$record = mysqli_query($db, $sql);
$result = mysqli_query($db, $query);
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
                    <a class="nav-link" href="ADDSCHEDULE.html"><i class="fas fa-clipboard-list"></i> Add Schedule<span class="sr-only">(current)</span></a>
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

          <table class="table" id="ctable">
            <thead>
              <tr>
                <!-- <th scope="col">S.No</th> -->
                <th scope="col">CourseID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Course Description</th>
                <!-- <th scope="col">Instructor/s</th> -->
                <th scope="col">Course Objectives</th>
                <th scope="col">Course Instructor</th>
                <th scope="col">Course Langugage</th>
                <th scope="col">Course Category</th>
              </tr>
            </thead>
              <tbody>
              <?php        
            $mysqli = new mysqli("localhost","root","","isdm");
            $query3=$mysqli->query("SELECT * FROM courses WHERE course_id = $courseId");
             ?>
    <?php while($row = mysqli_fetch_row($query3)) { ?>
  
    <tr ><td> <?php echo $row[0] ?></td>
    <td id="data" contenteditable="false" ><a id="formAnchor" data-val="<?php echo $row[0] ?>" href="2Dashbard.php?courseId=<?php echo $row[0] ?>"><?php echo $row[1] ?></a></td>
    <!-- add link of the page which would show the edit option that is the dashboard page -->
    <td id="data" contenteditable="false"><?php echo $row[3] ?></td> 
    <td id="data" contenteditable="false"><?php echo $row[4] ?></td>
    <td id="data" contenteditable="false"><?php echo $row[7] ?></td>
    <td id="data" contenteditable="false"><?php echo $row[10] ?></td>
    <td id="data" contenteditable="false"><?php echo $row[11] ?></td>
    <!-- <td id="data" contenteditable="false"><?php echo $row[7] ?></td>
    <td id="data" contenteditable="false"><?php echo $row[8] ?></td> -->
    <td id="btn" onclick="editable(this.parentNode.rowIndex )"><i class="fa fa-edit" style="font-size:24px"></i></td>
    <!-- <td id="submit" onclick="submit()" style="display: none" >&#8594;</td> -->
    </tr>
    <?php } ?>
        
    <!--table-responsive-->   
           </div><!--container-->
  <script>
  var row;
  var courseID;
  function editable(b) {
    console.log("inside editable");
    var noneditable_elements = document.querySelectorAll("[contenteditable=false]");
    // var noneditable_buttons = document.querySelectorAll("[id=btn]");
    // var editable_elements = document.querySelectorAll("[contenteditable=true]");
    // alert(b);
    document.getElementById("submit").style.display="block";
    // table tr:nth-child(b) {display : none;}
    //document.getElementById("pTable").childNodes[b].color='blue';
    row = b;
    var eles = document.querySelectorAll("[id=btn]");
    for (var i=0; i < eles.length; i++)
      eles[i].onclick = null;
    var number = 8;  //number of contenteditables
    var k, m=0;
    for(var i=0; i<noneditable_elements.length; i++){
      // console.log('i: ',i,'  b ', (b-1)*number + m)
      k = (b-1)*number + m;
     if(i == k && m <8){ //m less than 8 signifies the number of content editables
        noneditable_elements[i].setAttribute("contenteditable", true);
        m++;  
     } else {
      noneditable_elements[i].setAttribute("contenteditable", false);
      noneditable_elements[i].style.color="grey";
      
     }    
    } 
//     var x = document.getElementById("data");
// if (x.contentEditable == "true") {
//    // x.contentEditable = "false";
//     // button.innerHTML = "Enable content of p to be editable!";
//     console.log("Enable content of p to be editable!")
// } else {
//    // x.contentEditable = "true";
//     // button.innerHTML = "Disable content of p to be editable!";
//     console.log("set to true");
// }
}
function submit(){
  // console.log('row: ',row);
  var x=document.getElementById("ctable").rows[row];
// we add the id to the course table which we see on the screen 
  courseID=x.cells[0].innerHTML;
  console.log(courseID);
  var editable_elements = document.querySelectorAll("[contenteditable=true]");
  console.log("out: ",editable_elements[0].value); 
    var form = document.createElement("form");
    var element1 = document.createElement("input"); 
    var element2 = document.createElement("input");  
    var element3 = document.createElement("input");
    
    var element4 = document.createElement("input"); 
    var element5 = document.createElement("input");  
    var element6 = document.createElement("input");
    
    var element7 = document.createElement("input"); 
    var element8 = document.createElement("input");  
    var element9 = document.createElement("input");
    form.method = "POST";
    form.action = "update.php?id=<?php echo $courseId;?>";   
    
    element1.value=courseID;
    console.log(courseID);
    element1.name="Course_ID";
    form.appendChild(element1); 

    element2.value=document.getElementById('formAnchor').innerHTML;
    element2.name="name";
    console.log(element2.value);
    form.appendChild(element2);
    
    element3.value=x.cells[2].innerHTML;
    element3.name="description";
    console.log(element3.value);
    form.appendChild(element3);
    
    element4.value=x.cells[3].innerHTML;
    element4.name="objective";
    // gender
    console.log(element4.value);
    form.appendChild(element4);
    
    element5.value=x.cells[4].innerHTML;
    element5.name="instructor";
    // disease
    console.log(element5.value);
    form.appendChild(element5);
    
    element6.value=x.cells[5].innerHTML;
    element6.name="language";
    // admission
    console.log(element6.value);
    form.appendChild(element6);
    
    element7.value=x.cells[6].innerHTML;
    element7.name="category";
    console.log(element7.value);
    form.appendChild(element7);

    // element8.value=x.cells[7].innerHTML;
    // element8.name="hospital";
    // console.log(element8.value);
    // form.appendChild(element8);
    
    // element9.value=x.cells[8].innerHTML;
    // element9.name="contact";
    // console.log(element9.value);
    // form.appendChild(element9);
    
    document.body.appendChild(form);
    form.submit();
}
</script>
                <?php
                while($res = mysqli_fetch_assoc($result)) {

                  echo "<tr>";
                  echo "<td>".$res['course_id']."</td>";
                  echo "<td contenteditable=true>".$res['course_name']."</td>";
                  echo "<td contenteditable=true>".$res['course_description']."</td>";
                  echo "<td contenteditable=true>".$res['course_obj1']."</td>";
                  echo "<td contenteditable=true>".$res['course_instructor1']."</td>";
                  echo "<td contenteditable=true>".$res['course_lang']."</td>";
                  echo "<td contenteditable=true>".$res["course_cat"]."</td>";
                  // echo " &#10000";
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
              <!-- <th scope="col">S.No</th> -->
              <th scope="col">Topic</th>
              <th scope="col">Blooom's Method</th>
              <th scope="col">Teaching Method</th>
              <!-- <th scope="col">Instructor/s</th> -->
              <th scope="col">Evaluation</th>
              <th scope="col">Duration</th>
              <!-- <th scope="col">Problem</th> -->
              <!-- <th scope="col">Solution</th> -->
            </tr>
          </thead>
          <tbody>
            <?php

            while($row = mysqli_fetch_assoc($record)) {

              echo "<tr>";
              // echo "<td>".$row['schedule_id']."</td>";
              echo "<td contenteditable=true>".$row['topicname1']."</td>";
              echo "<td contenteditable=true>".$row['bm1']."</td>";
              echo "<td contenteditable=true>".$row['tm1']."</td>";
              echo "<td contenteditabl e=true>".$row['evaluation1']."</td>";
              echo "<td contenteditable=true>".$row['duration1']."</td>";
              // echo "<td>".$row['problem']."</td>";
              // echo "<td>".$row['statement']."</td>";
              echo "</tr>";
              echo "<tr>";
              // echo "<td>".$row['schedule_id']."</td>";
              echo "<td contenteditable=true>".$row['topicname2']."</td>";
              echo "<td contenteditable=true>".$row['bm2']."</td>";
              echo "<td contenteditable=true>".$row['tm2']."</td>";
              echo "<td contenteditable=true>".$row['evaluation2']."</td>";
              echo "<td contenteditable=true>".$row['duration2']."</td>";
              // echo "<td>".$row['problem']."</td>";
              // echo "<td>".$row['statement']."</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td contenteditable=true>".$row['topicname3']."</td>";
              echo "<td contenteditable=true>".$row['bm3']."</td>";
              echo "<td contenteditable=true>".$row['tm3']."</td>";
              echo "<td contenteditable=true>".$row['evaluation3']."</td>";
              echo "<td contenteditable=true>".$row['duration3']."</td>";
              // echo "<td>".$row['problem']."</td>";
              // echo "<td>".$row['statement']."</td>";
              echo "</tr>";

              echo "<tr>";
              echo "<td contenteditable=true>".$row['topicname4']."</td>";
              echo "<td contenteditable=true>".$row['bm4']."</td>";
              echo "<td contenteditable=true>".$row['tm4']."</td>";
              echo "<td contenteditable=true>".$row['evaluation4']."</td>";
              echo "<td contenteditable=true>".$row['duration4']."</td>";
              // echo "<td>".$row['problem']."</td>";
              // echo "<td>".$row['statement']."</td>";
              echo "</tr>";
            }//end while
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
                <th scope="col">Problem</th>
                <th scope="col">Solution</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($rec = mysqli_fetch_assoc($read)) {

                echo "<tr>";
                echo "<td contenteditable=true>".$rec['total_duration']."</td>";
                echo "<td contenteditable=true>".$rec['problem']."</td>";
                echo "<td contenteditable=true>".$rec['statement']."</td>";
                echo "</tr>";
              }
               ?>
             </tbody>
           </table>
           <div style="display: none;" id="submit"><button class="btn btn-success" onclick="submit()">Update</button></div>
           <br>

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
