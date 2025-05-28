<?php
include("../db_config.php");

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' ";
$stmt=$con->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();

if ($email==$user['email'] && $password==$user['password']) {
  header("Location: ../php/dashboard.php");
} else {
  echo "Invalid email or password.";
}
?>
