<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <?php echo "<h1>This is my attempt at your task. </h1>"; ?>
    <nav class="home-nav">
        <a href="change-password.php">Update Password</a>
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>