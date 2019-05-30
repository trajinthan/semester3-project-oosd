<?php

session_start();

// initializing variables
if (isset ($_SESSION ["email"])) $email = $_SESSION['email'];
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'asesment');

// change password
if (isset($_POST['change_password'])) {
  // receive all input values from the form
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled by adding (array_push()) corresponding error into $errors array
  if (empty($password_1) && empty($password_2)) array_push($errors, "All the fields are empty"); 
  elseif (empty($password_1) || empty($password_2)) array_push($errors, "A field is left empty");
  
  // check if passwords match
  elseif ($password_1 != $password_2) array_push($errors, "The two passwords do not match");

  // check password standards
  if ((strlen ($password_1) < 8) || 
      (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password_1)) ||
      (!preg_match('~[0-9]+~', $password_1))
        ) array_push($errors, "Password must have 8 characters including a number and a special character");

  // Finally, update password if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);
    
    $query = "UPDATE user_database 
                SET password = '$password', isConfirmed = true, forgotPassword = false
                WHERE email = '$email'";
    mysqli_query($db, $query);
    header('location: login.php');
  }
}
?>