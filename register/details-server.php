<?php

session_start();

// initializing variables
if (isset ($_SESSION ["email"])) $email = $_SESSION['email'];
$email = $_SESSION ['email'];

$firstname = "";
$lastname = "";
$id = "";
$class = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'asesment');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $class = mysqli_real_escape_string($db, $_POST['class']);

  // form validation: ensure that the form is correctly filled by adding (array_push()) corresponding error into $errors array
  if (empty($firstname) || empty($lastname) || empty($id)) array_push($errors, "Fields left empty");
  
  // check if names are valid 
  if ((preg_match('~[0-9]+~', $firstname)) || (preg_match('~[0-9]+~', $lastname))) array_push($errors, "Names are not correct");

  // Register user details if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "UPDATE user_database 
              SET firstname = '$firstname', lastname = '$lastname', id = '$id', class = '$class'
              WHERE email = '$email'";
  	mysqli_query($db, $query);
  	header('location: login.php');
  }
}
?>