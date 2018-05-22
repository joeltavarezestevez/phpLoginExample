<?php
  session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
  echo "This page is only for registered users.<br>";
  echo "<br><a href='login.html'>Login</a>";
  exit;
}
else {
  $now = time();

  //VERIFY SESSION EXPIRING TIME
  if($now > $_SESSION['expire']) {
  session_destroy();

  echo "Your session has ended,
  <a href='login.html'>Login</a>";
  exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Control Panel</title>
</head>

<body>
<h1>Control Panel</h1>
<p>Here you can add all the links to the pages available for registered users like: </p>

<ul>
  <li>Edit Profile</li>
  <li>Edit Preferences</li>
  <li>Settings</li>
  <li>etc.</li>
</ul>
<br>
<a href=logout.php>Logout</a>
</body>
</html>
