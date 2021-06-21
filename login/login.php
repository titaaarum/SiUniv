<?php
session_start();
include '../connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == "" || $password == "") {
  header("location: form-login.php");
}
else {
  $query = "select * from user where username = '$username' and password = '$password'";
  $result = mysqli_query($connect, $query);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    header("location: ../dosen/read.php");
    $_SESSION['user'] = $username;
  }
  else {
    header("location: form-login.php");
  }
}
?>
