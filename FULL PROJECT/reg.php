<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Registration Form | CodingLab </title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/abc8aa89c2.js"></script>

    <link rel="stylesheet" href="css/reg.css">
</head>

<body>
    <?php
    require('connection.php');
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];

        $query = "INSERT INTO users(fullname, username, email, phone_number, password) 
              VALUES('$fullname', '$username', '$email', '$phone_number', '$password')";

        $result = mysqli_query($connection, $query);
        if ($password_confirm === $password) {
            if ($result) {
                header('Location: /php/login.php');
            } else {
                $error = "Try again!";
            }
        } else {
            $error = "Password mismatch!";
        }
    }
    ?>
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
                <li><a href="reg.php" class="nav-item"><span class="reg-span">Register</span></a></li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="title">Registration</div>
            <div class="content">
                <form action="#" method="POST">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" name="fullname" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input type="text" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" name="phone_number" placeholder="Enter your number" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="text" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="text" name="password_confirm" placeholder="Confirm your password" required>
                        </div>

                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1">
                        <input type="radio" name="gender" id="dot-2">
                        <input type="radio" name="gender" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="Register">
                    </div>
                    <?php if (isset($error)) { ?><div class="alert alert-danger" role="alert"> <?php echo $error; ?> </div><?php } ?>
                </form>
            </div>
        </div>
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