<?php
  session_start();

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $now < $_SESSION['expire']) {
    header('Location: controlPanel.php');
    exit();
  } else {
    header('Location: login.html');
    exit();
  }
?>
