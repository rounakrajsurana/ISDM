<?php

session_start();
$user_id = $_SESSION["userid"];
echo $user_id;
$db = mysqli_connect('localhost','root','','isdm');

if($db->connect_error) {
  die("Connection failed: ".$db->connect_error);
}

$coursename = mysqli_real_escape_string($db, $_POST['coursename']);
// $courseid = mysqli_real_escape_string($db, $_POST['courseid']);
// $scheduleid = mysqli_real_escape_string($db, $_POST['scheduleid']);
$coursedesc = mysqli_real_escape_string($db, $_POST['coursedesc']);
$learn = mysqli_real_escape_string($db, $_POST['learn']);
$obj1 = mysqli_real_escape_string($db, $_POST['obj1']);
$obj2 = mysqli_real_escape_string($db, $_POST['obj2']);
$obj3 = mysqli_real_escape_string($db, $_POST['obj3']);
$instructor1 = mysqli_real_escape_string($db, $_POST['instructor1']);
$instructor2 = mysqli_real_escape_string($db, $_POST['instructor2']);
$instructor3 = mysqli_real_escape_string($db, $_POST['instructor3']);
$language = mysqli_real_escape_string($db, $_POST['language']);
$category = mysqli_real_escape_string($db, $_POST['subject']);



if (empty($coursename)) { array_push($errors, "Coursename is required"); }
// if (empty($courseid)) { array_push($errors, "ID is required"); }3
if (empty($obj1)) { array_push($errors, "Atleast one objective is required"); }
if (empty($instructor1)) { array_push($errors, "Atleast one instructor is required"); }

  // echo $query;
  // die();
  $query = "INSERT INTO courses (course_name, course_description, learning_outcome, course_obj1, course_obj2, course_obj3, course_instructor1, course_instructor2, course_instructor3, course_lang, course_cat) VALUES ('$coursename', '$coursedesc','$learn', '$obj1','$obj2', '$obj3', '$instructor1', '$instructor2', '$instructor3', '$language', '$category')";
  mysqli_query($db, $query);

  $course_id = mysqli_insert_id($db);
  // echo $query;
  // die();
  // echo ""
  $query2 = "INSERT INTO user_courses (course_id, user_id) VALUES ($course_id, $user_id)";
  mysqli_query($db, $query2);

  $username = $_SESSION['username'];
  header("location: 2Dashbard.php");
// echo implode($errors);
?>
