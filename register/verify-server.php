<?php

if (!session_id ()) session_start();

// get values from email-sender
if (isset ($_SESSION ["email"])) $email = $_SESSION ['email'];
if (isset ($_SESSION ["gen_code"])) $gen_code = $_SESSION ['gen_code'];

// define variables
$user_code = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'asesment');
$user_check_query = "SELECT * FROM user_database 
                      WHERE email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

// verify
if (isset($_POST['email_confirm'])) {
  
  // receive all input values from the form
  $user_code = mysqli_real_escape_string($db, $_POST['user_code']);

  // check whether both codes match
  if ($user_code != $gen_code) array_push ($errors, "The codes do not match");
  
  // in case codes match
  else {
    if (count($errors) == 0) {
        // set isConfirmed == true
        $query = "UPDATE user_database SET isConfirmed = true WHERE email = '$email'";
        mysqli_query($db, $query);

        // go to "change password page" or "details page" based on forgotPassword
        if ($user) {
          // if forgotPassword == true
          if ($user['forgotPassword']) {
            // move to email sending page
            header('location: change_password.php');
          } else header('location: details.php');
        }
    }
  }
  $_SESSION['email'] = $email;
}
?>