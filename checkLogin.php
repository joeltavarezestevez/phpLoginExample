<?php
session_start();

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "db";
$tbl_name = "users";

$connection = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($connection->connect_error) {
 die("Connection failed: " . $connection->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM $tbl_name WHERE nombre_usuario = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($password, $row['password'])) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60); //time for expiring session

    echo "Welcome! " . $_SESSION['username'];
    echo "<br><br><a href=controlPanel.php>Go to Control Panel</a>";

 } else {
   echo "Username or Password Incorrect!.";

   echo "<br><a href='login.html'>Try Again</a>";
 }
 mysqli_close($conexion);
 ?>
