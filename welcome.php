<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login-form.php");
    exit;
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Witaj, <?php echo $username; ?>!</title>
</head>
<body>
    <h2>Witaj, <?php echo $username; ?>!</h2>
    <p>Zalogowałeś się pomyślnie.</p>
</body>
</html>