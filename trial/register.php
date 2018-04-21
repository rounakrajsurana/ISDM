<?php

session_start();

$db = mysqli_connect('localhost', 'root','', 'isdm');


//Register

  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  // echo implode($_POST);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2)
  {
     echo $password_1." ".$password_2;
	   array_push($errors, "The two passwords do not match");
  }




  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (user_username, user_email, user_pwd)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location: 2Dashbard.html');
  } else {
    echo "Errors: ";
    echo implode($errors);
  }






 ?>
