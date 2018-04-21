<?php

session_start();

$user_id = $_SESSION["userid"];
$db = mysqli_connect('localhost','root','','isdm');

if($db->connect_error) {
  die("Connection failed: ".$db->connect_error);
}

// $scheduleid = mysqli_real_escape_string($db, $_POST['scheduleid']);
$topic1 = mysqli_real_escape_string($db, $_POST['topic1']);
$bl1 = mysqli_real_escape_string($db, $_POST['bl1']);
$teach1 = mysqli_real_escape_string($db, $_POST['teach1']);
$eval1 = mysqli_real_escape_string($db, $_POST['eval1']);
$dur1 = mysqli_real_escape_string($db, $_POST['dur1']);
$topic2 = mysqli_real_escape_string($db, $_POST['topic2']);
$bl2 = mysqli_real_escape_string($db, $_POST['bl2']);
$teach2 = mysqli_real_escape_string($db, $_POST['teach2']);
$eval2 = mysqli_real_escape_string($db, $_POST['eval2']);
$dur2 = mysqli_real_escape_string($db, $_POST['dur2']);
$topic3 = mysqli_real_escape_string($db, $_POST['topic3']);
$bl3 = mysqli_real_escape_string($db, $_POST['bl3']);
$teach3 = mysqli_real_escape_string($db, $_POST['teach3']);
$eval3 = mysqli_real_escape_string($db, $_POST['eval3']);
$dur3 = mysqli_real_escape_string($db, $_POST['dur3']);
$topic4 = mysqli_real_escape_string($db, $_POST['topic4']);
$bl4 = mysqli_real_escape_string($db, $_POST['bl4']);
$teach4 = mysqli_real_escape_string($db, $_POST['teach4']);
$eval4 = mysqli_real_escape_string($db, $_POST['eval4']);
$dur4 = mysqli_real_escape_string($db, $_POST['dur4']);
$td = mysqli_real_escape_string($db, $_POST['td']);
$target = mysqli_real_escape_string($db, $_POST['tl']);
$problem = mysqli_real_escape_string($db, $_POST['problem']);
$solution = mysqli_real_escape_string($db, $_POST['solution']);



// if (empty($coursename)) { array_push($errors, "Coursename is required"); }
// if (empty($courseid)) { array_push($errors, "ID is required"); }
// if (empty($obj1)) { array_push($errors, "Atleast one objective is required"); }
// if (empty($instructor1)) { array_push($errors, "Atleast one instructor is required"); }

  $query = "INSERT INTO schedule (topicname1, bm1, tm1, evaluation1, duration1, topicname2, bm2, tm2, evaluation2, duration2, topicname3, bm3, tm3, evaluation3, duration3, topicname4, bm4, tm4, evaluation4, duration4, total_duration, target_learner, problem, statement) VALUES ('$topic1', '$bl1', '$teach1', '$eval1','$dur1', '$topic2', '$bl2', '$teach2', '$eval2', '$dur2', '$topic3', '$bl3', '$teach3', '$eval3', '$dur3', '$topic4', '$bl4', '$teach4', '$eval4', '$dur4', '$td', '$target', '$problem', '$solution')";
  mysqli_query($db, $query);
  $scheduleid = mysqli_insert_id($db);
  $courseId = $_GET["id"];
  $query2 = "INSERT INTO user_courses (course_id,user_id,schedule_id) VALUES ($courseId, $user_id, $scheduleid)";
  mysqli_query($db, $query2);
  header("location: 2Dashbard.php");
// echo implode($errors);
?>
