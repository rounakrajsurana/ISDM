<?php

session_start();

$db = mysqli_connect('localhost', 'root','', 'isdm');

// Add Course to the database
// Receive input from the form
$coursename = mysqli_real_escape_string($db, $_POST['coursename']);
$courseid = mysqli_real_escape_string($db, $_POST['courseid']);
$coursedescription = mysqli_real_escape_string($db, $_POST['coursedesc']);
// $courseid = mysqli_real_escape_string($db, $POST['courseid']);

$query = "INSERT INTO courses (course_id, course_name, course_description)
      VALUES('$courseid', '$coursename', '$coursedescription')";
mysqli_query($db, $query);
$_SESSION['username'] = $username;
header('location: 2Dashbard.html');

 ?>
