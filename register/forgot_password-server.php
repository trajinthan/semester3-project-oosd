<?php

session_start();

// initializing variables
$email = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'asesment');

if (isset($_POST['forgot_password'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);

  // form validation: ensure that the form is correctly filled by adding (array_push()) corresponding error into $errors array
  if (empty($email)) array_push($errors, "Field is empty"); 
  
  // check the database to make sure a user already exist with the same email
  $user_check_query = "SELECT * FROM user_database 
                        WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // if user exists
  if ($user) {
    if ($user['email'] === $email) {
        
        // move to email sending page
        if (count($errors) == 0) {
            
            // set isConfirmed = 0
            $query = "UPDATE user_database 
                        SET isConfirmed = false
                          , forgotPassword = true 
                        WHERE email = '$email'";
            mysqli_query($db, $query);

            $_SESSION['email'] = $email;
            header('location: send.php');
        }

    }
  } else array_push($errors, "This email is not registered");
}
?>