<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();


  $db = mysqli_connect('localhost', 'root','', 'isdm');
  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE user_username='$username' OR user_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  $isUserExist = false;

  if ($user) { // if user exists
  if ($user['username'] === $username) {
   // array_push($errors, "Username already exists");
    $isUserExist = true;
  }

  if ($user['email'] === $email) {
    // array_push($errors, "email already exists");
    $isUserExist = true;
  }
}

// LOGIN USER
  // receive all input values from the form
$username = "notset";
  if(isset($_POST["username"])){
    $username = $_POST["username"];
      }
$password ="";
  if(isset($_POST["password"])){
    $password = md5($_POST["password"]);
  }

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


  if (empty($username) and empty($email)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
  //  array_push($errors, "Password is required");
  $password = "";
  }

  if (count($errors) == 0) {
    $query = "SELECT * FROM users WHERE user_username='$username' AND user_pwd='$password'";
    $results = mysqli_query($db, $query);
    if( $results != false) {

      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        header('location: 2Dashbard.html');
      }
      else {
        echo "Wrong password!";
      }
      die();
    }
    if($isUserExist){
      array_push($errors, "Wrong username/password combination");
      die();
    }
  }
?>
