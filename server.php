<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'reg');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

// POST USER
if (isset($_POST['post_user'])) {
 $image = $_FILES['image']['name'];
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
 $sign = mysqli_real_escape_string($db, $_POST['sign']);
 $address = mysqli_real_escape_string($db, $_POST['address']);
 $number = mysqli_real_escape_string($db, $_POST['number']);
// $image = mysqli_real_escape_string($db, $_POST['image']);
 $status = mysqli_real_escape_string($db, $_POST['status']);
  $target = "image/".basename($image);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($title)) { array_push($errors, "Title is required"); }
  if (empty($description)) { array_push($errors, "Description is required"); }
  if (empty($sign)) { array_push($errors, "Sign is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($number)) { array_push($errors, "Number is required"); }
  //if (empty($image)) { array_push($errors, "Image is required"); }
  if (empty($status)) { array_push($errors, "Status is required"); }
 

 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
   
    $query = "INSERT INTO post (title, description, sign, address, number, image, status ) 
          VALUES('$title', '$description', '$sign', '$address', '$number', '$image', '$status')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: home.php');

  }
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  
}

/*  function get_post_data($post)
  {
    $result = mysql_query("select * from 'post'");
    $info[]= array();
    while ($row=mysql_fetch_assoc($result)) {
      $info[]=$row;
    }
    return $info;
  
  }*/
  $sql = "SELECT * FROM post";
  $re = $db->query($sql);
?>