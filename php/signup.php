<?php
include("../db_config.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
//$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$password=$_REQUEST['password'];
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email','$password')";
$stmt = $con->prepare($sql);
try {
    $stmt->execute();
    header("Location: ../html/index.html");
} catch (PDOException $e) {
    echo "Signup error: " . $e->getMessage();
}
?>
