<?php
session_start();
$id=$_SESSION['userid'];
include ("../db_config.php");
$stmt = $con->query("SELECT * FROM users where id='$id'");
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="container">
    <h2>Hy <?php echo $_SESSION['name']; ?></h2>
    <table>
      <tr>
        <th>ID</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>age</th>
        <th>mobile</th>
        <th>city</th>
      </tr>
      <?php foreach ($users as $user): ?>
        <tr>
          <td><?= htmlspecialchars($user['id']) ?></td>
          <td><?= htmlspecialchars($user['name']) ?></td>
          <td><?= htmlspecialchars($user['lastname']) ?></td>
          <td><?= htmlspecialchars($user['email']) ?></td>
          <td><?= htmlspecialchars($user['age']) ?></td>
          <td><?= htmlspecialchars($user['phone_number']) ?></td>
          <td><?= htmlspecialchars($user['city']) ?></td>
        
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>
</html>
