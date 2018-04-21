<?php

session_start();

$db = mysqli_connect('localhost','root','','isdm');

if($db->connect_error) {
  die("Connection failed: ".$db->connect_error);
}

$coursename = mysqli_real_escape_string($db, $_POST['coursename']);
$courseid = mysqli_real_escape_string($db, $_POST['courseid']);
$coursedesc = mysqli_real_escape_string($db, $_POST['coursedesc']);
$obj1 = mysqli_real_escape_string($db, $_POST['obj1']);
$obj2 = mysqli_real_escape_string($db, $_POST['obj2']);
$obj3 = mysqli_real_escape_string($db, $_POST['obj3']);
$instructor1 = mysqli_real_escape_string($db, $_POST['instructor1']);
$instructor2 = mysqli_real_escape_string($db, $_POST['instructor2']);
$instructor3 = mysqli_real_escape_string($db, $_POST['instructor3']);



if (empty($coursename)) { array_push($errors, "Coursename is required"); }
if (empty($courseid)) { array_push($errors, "ID is required"); }
if (empty($obj1)) { array_push($errors, "Atleast one objective is required"); }
if (empty($instructor1)) { array_push($errors, "Atleast one instructor is required"); }

  $query = "INSERT INTO courses (course_id, course_name, course_description, course_obj1, course_obj2, course_obj3, course_instructor1, course_instructor2, course_instructor3) VALUES ('$courseid', '$coursename', '$coursedesc','$obj1','$obj2', '$obj3', '$instructor1', '$instructor2', '$instructor3')";
  mysqli_query($db, $query);

// echo implode($errors);
?>
