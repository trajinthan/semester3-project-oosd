<?php

session_start();

// initializing variables
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'asesment');

// REGISTER USER
if (isset($_POST['login_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled by adding (array_push()) corresponding error into $errors array
  if (empty($email) || empty($password)) array_push($errors, "Fields left empty");

  // Login user details if there are no errors in the form
  if (count($errors) == 0) {

    $password = md5($password);
    $query = "SELECT * FROM user_database
              WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_array($results);
    
    if ((mysqli_num_rows($results) == 1) && ($row ['isConfirmed'] == true)) {
      $_SESSION['id'] = $row ['id'];
      
      // separate pages for student and lecturer login
      if ($row ['class'] == "Student") header('location: ../project_ms/student-home.php');
      elseif ($row ['class'] == "Lecturer") header ('location: ../project_ms/lecturer.php');
    } 
    elseif ((mysqli_num_rows($results) == 1) && ($row ['isConfirmed'] == false)) array_push($errors, "Your email has not been verified");
    else array_push($errors, "Wrong username or password");
  }
}
?>