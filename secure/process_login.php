<?php

include 'db_connect.php';
include 'functions.php';
sec_session_start(); // Our custom secure way of starting a php session.
if(isset($_POST['email'], $_POST['p'])) {
   $email = $_POST['email'];
   $password = $_POST['p']; // The hashed password.
   if(login($email, $password, $mysqli) == true) {
      // Login success
     header("Location: '..\..\..\secure.php");
   } else {
     if (checklocked($email, $mysqli) == true) {
     header("Location: '..\..\..\?error=2");
     } else {
     header("Location: '..\..\..\?error=1");
   }
}
} else {
   // The correct POST variables were not sent to this page.
   echo 'Invalid Request';
}

;?>
