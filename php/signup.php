<?php
include("../db_config.php");

$firstname = $_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email = $_REQUEST['email'];
$password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);
$number=$_REQUEST['number'];
$city=$_REQUEST['city'];
$age=$_REQUEST['age'];

$sql = "INSERT INTO users (name,lastname, email, password,phone_number,age,city) VALUES ('$firstname','$lastname', '$email','$password','$number','$age','$city')";
$stmt = $con->prepare($sql);
try {
    $stmt->execute();
    header("Location: ../html/index.html");
} catch (PDOException $e) {
    echo "Signup error: " . $e->getMessage();
}
?>
