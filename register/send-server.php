<?php

session_start();

// initializing variables
if (isset ($_SESSION ["email"])) $email = $_SESSION ['email'];
$errors = array();

// generate a random 5 digit number
$gen_code = rand (10000, 99999);

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'asesment');

// REGISTER USER
if (isset($_POST['send_mail'])) {

    require 'PHPMailer/PHPMailerAutoload.php';

    // server details
    $mail = new PHPMailer;
    $mail -> isSMTP ();
    $mail-> Host = "smtp.gmail.com";

    // for testing purposes
    $mail -> SMTPDebug = 0;

    $mail -> SMTPAuth = true;
    $mail -> Username = 'betatestersuom@gmail.com';
    $mail -> Password = 'beta123@uom';
    $mail -> SMTPSecure = 'tls';
    $mail -> Port = 587;
    $mail -> smtpConnect(
        array(
            "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
            )
        )
    );

    // sender/receiver details
    $mail -> From = 'betatestersuom@gmail.com';
    $mail -> addAddress ($email);
    $mail -> Subject = "Please verify your email";
    $mail -> isHTML (true);
    $mail -> Body = "The code is <br><br> <b> $gen_code </b>";

    if(!$mail -> send()) {
        array_push($errors, "Mail not sent");
        exit;
    } else {
        $_SESSION ['email'] = $email;
        $_SESSION ['gen_code'] = $gen_code;
        header('location: verify.php');
    }
}
?>