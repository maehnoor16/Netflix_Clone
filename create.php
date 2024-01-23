<?php
  include 'connection.php';
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  $sql = "insert into signup (fname,lname,email, password) values ('$fname','$lname','$email', '$password')";
  $conn->query($sql);
  $conn->close();
  header("location: display.php");
?>