<!DOCTYPE html>
<html>
<head>
  <title>Login Receiver</title>
</head>
<body>
  <h1>Login Details Received</h1>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Collect value of input field
      $username = htmlspecialchars($_POST['username']);
      $password = htmlspecialchars($_POST['password']);
      echo "<p>Username: " . $username . "</p>";
      echo "<p>Password: " . $password . "</p>";
    } else {
      echo "<p>No POST data received.</p>";
    }
  ?>
</body>
</html>