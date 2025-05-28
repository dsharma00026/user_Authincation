<?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
try {
    $stmt->execute([$name, $email, $password]);
    header("Location: ../pages/index.html");
} catch (PDOException $e) {
    echo "Signup error: " . $e->getMessage();
}
?>
