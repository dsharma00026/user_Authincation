<?php
session_start();
include("../db_config.php");


$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' ";
$stmt=$con->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();

if ($email==$user['email'] && password_verify($password, $user['password'])) {
  $_SESSION['userid']=$user['id'];
  $_SESSION['name']=$user['name'];

 header("Location: ../php/dashboard.php");
} else {
  echo "Invalid email or password.";
}
?>



