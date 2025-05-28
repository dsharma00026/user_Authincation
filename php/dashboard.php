<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: index.html");
  exit();
}
include '../php/db.php';
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="container">
    <h2>User Dashboard</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
      <?php foreach ($users as $user): ?>
        <tr>
          <td><?= htmlspecialchars($user['id']) ?></td>
          <td><?= htmlspecialchars($user['name']) ?></td>
          <td><?= htmlspecialchars($user['email']) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <a href="../php/logout.php">Logout</a>
  </div>
</body>
</html>
