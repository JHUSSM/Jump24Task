<?php 


error_reporting(0);
session_start();

$id = $_SESSION['id'];
$user = $_SESSION['username'];

if (isset($_SESSION['id'])){

}
if (isset($_SESSION['id']) && isset($_SESSION['username'])){
}

    include 'config.php';

if (isset($_POST['submit'])) {
    $op = md5($_POST['op']);
    $np = md5($_POST['np']);
    $c_np = md5($_POST['c_np']);


    if ($np == $c_np) {
        $id = $_SESSION['id'];
        $sql = "SELECT password FROM users WHERE id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);


        if($result->num_rows === 1){
            $sql = "UPDATE users SET password='$np' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Password has been updated successfully!')</script>";
                $_POST['op'] = "";               
                $_POST['np'] = "";
                $_POST['c_np'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else{
            echo "<script>alert('Woops! Thats the wrong password for this account.')</script>";
        }

            
    } else {
        echo "<script>alert('Passwords Are Not Matched.')</script>";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css?version=2">

	<title>Update Password - Jamal Muse</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email"> 
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Update Password</p>

            <div class="input-group">
                <input type="password" placeholder="Old Password:" name="op" value="<?php echo $_POST['op']; ?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="New Password:" name="np" value="<?php echo $_POST['np']; ?>" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Confirm New Password:" name="c_np" value="<?php echo $_POST['c_np']; ?>" required>
            </div>



            <div class="input-group">
                <button name="submit" class="btn">Update Password</button>
            </div>
            <p class="login-register-text">Return to homepage? <a href="welcome.php"ca"> HOME</a></p>
        </form>
    </div>
</body>
</html>