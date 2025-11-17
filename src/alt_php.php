<?php
// Example: Toggle this variable to test
$userStatus = "loggedin"; // change to "guest" or anything else to test the 'else' block
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Links Example</title>
</head>
<body>

<h2>Navigation Menu</h2>

<?php if ($userStatus == "loggedin") : ?>

  <a href="account.php">Account</a> |
  <a href="logout.php">Logout</a>

<?php else : ?>

  <a href="login.php">Login</a> |
  <a href="register.php">Register</a>

<?php endif; ?>

required

</body>
</html>