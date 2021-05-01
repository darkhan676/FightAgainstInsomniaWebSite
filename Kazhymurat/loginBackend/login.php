<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>

    </style>
</head>

<body>
    <form class="box" action="#" method="post">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="" value="Login">
        <hr size="1" color="white">
        <button type="reg" class="register"><a href="reg.php">Sign up</a></button>

    </form>
<?php
session_start();
require('connection.php');
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($connection, $query);
$counter = mysqli_num_rows($result);
if($counter == 1) {
    $_SESSION['email'] = $email;
} else {
    $error = "Try again!";
}

if(isset($_SESSION['email'])) { 
    $email = $_SESSION['email']; 
    echo "<button type='reg' class='register'><a href='logout.php'>Log Out</a></button>";   
}

?>

</body>

</html>
