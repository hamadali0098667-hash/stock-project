<?php 
require_once 'php_action/db_connect.php'; // Aapki connection file ka path

if($_POST) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Aapka system MD5 use kar raha hai

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if($connect->query($sql) === TRUE) {
        echo "<p>Account Created Successfully! <a href='index.php'>Login Now</a></p>";
    } else {
        echo "Error: " . $connect->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stock System - Register</title>
    <link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 50px; width: 400px;">
    <div class="panel panel-info">
        <div class="panel-heading">Register New User</div>
        <div class="panel-body">
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Save User</button>
                <a href="index.php" class="btn btn-default">Back to Login</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>