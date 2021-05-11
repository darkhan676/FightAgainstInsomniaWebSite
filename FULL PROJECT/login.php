<?php
session_start();
if (count($_POST) > 0) {
    require('connection.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $query);
    $counter = mysqli_num_rows($result);
    if ($counter == 1) {
        $_SESSION['email'] = $email;
        header('Location: /php/index.php');
    } else {
        $_SESSION['error'] = "Login or password do not match!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/abc8aa89c2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>

    </style>
</head>

<body>
    <div class="header">
        <div class="header-left">
            <h2>DEK</h2>
            &nbsp;&nbsp;&nbsp;
            <ul>
                <li><a href="index.php" class="nav-item">Home</a></li>
                <li><a href="infopage.php" class="nav-item">About</a></li>
                <li><a href="shop.php" class="nav-item">Online Shop</a></li>
                <li><a href="#" class="nav-item">Survey</a></li>
            </ul>
        </div>
        <div class="header-right">
            <ul>
                <li><a href="login.php" class="nav-item">Log in</a></li>
                <li><a href="reg.php" class="nav-item"><span class="reg-span">Register</span></a></li>;
            </ul>
        </div>
    </div>
    <div class="cont">
        <form class="box" action="" method="POST">
            <h1>Login</h1>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="" value="Login">
            <hr>
            <button type="reg" class="register"><a href="reg.php">Sign up</a></button>
                <?php 
                    if($_SESSION['error']) {
                        echo '<div class="alert alert-warning" role="alert"> '. $_SESSION['error'] .' </div>';
                    } else {
                        $_SESSION['error'] = null;
                    }
                ?>
        </form>
    </div>
    <div class="footer">
        <h2>DEK</h2>
        <div class="footer-social">
            <a href="#">
                <i class="fa fa-facebook-official"></i>
            </a>
            <a href="#">
                <i class="fa fa-twitter-square"></i>
            </a>
            <a href="#">
                <i class="fa fa-vk"></i>
            </a>
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
        <div class="footer-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="infopage.php">About</a></li>
                <li><a href="shop.php">Online Shop</a></li>
                <li><a href="#">Survey</a></li>
            </ul>
        </div>
        <div class="footer-privacy">
            Privacy Policy
        </div>
        <div class="footer-years">
            © 2021 DEK Heatlh.
        </div>
    </div>


</body>

</html>