<?php

session_start();

// initializing variables
$email = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'asesment');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled by adding (array_push()) corresponding error into $errors array
  if (empty($email) && empty($password_1) && empty($password_2)) array_push($errors, "All the fields are empty"); 
  elseif (empty($email) || empty($password_1) || empty($password_2)) array_push($errors, "A field is left empty");
  
  // check if email is valid
  if (filter_var ($email, FILTER_VALIDATE_EMAIL) === true) array_push($errors, "Email is not valid");

  // check if email belongs to CSE department
  // if (strpos ($email, "@cse.mrt.ac.lk") == false) { array_push ($errors, "A CSE email is required"); }

  // check if passwords match
  elseif ($password_1 != $password_2) array_push($errors, "The two passwords do not match");

  // check password standards
  if ((strlen ($password_1) < 8) || 
      (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password_1)) ||
      (!preg_match('~[0-9]+~', $password_1))
      ) array_push($errors, "Password must have 8 characters including a number and a special character");

  // check the database to make sure a user does not already exist with the same email
  $user_check_query = "SELECT * FROM user_database WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) array_push($errors, "This email already exists");
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO user_database (email, password, isConfirmed, forgotPassword) 
              VALUES ('$email', '$password', false, false)";
  	mysqli_query($db, $query);

    $_SESSION['email'] = $email;
  	header('location: send.php');
  }
}
?>