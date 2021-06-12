<?php
session_start();
if (isset($_POST["add_to_cart"])) {
    if (isset($_COOKIE["music_shopping_cart"])) {
        $cookie_data = stripslashes($_COOKIE["music_shopping_cart"]);
        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }
    $item_id_array = array_column($cart_data, 'music_id');
    if (in_array($_POST["hidden_id"], $item_id_array)) {
        foreach ($cart_data as $keys => $values) {
            $cart_data[$keys]["music_id"] == $_POST["hidden_id"];
        }
    } else {
        $items = array(
            'music_id' => $_POST["hidden_id"],
            'item_title' => $_POST["hidden_title"],
            'music_author' => $_POST["hidden_author"]
        );
        $cart_data[] = $items;
    }
    $item_data = json_encode($cart_data);
    setcookie('music_shopping_cart', $item_data, time() + 7 * 24 * 60 * 60);
    header('Location: music.php?success=1');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/shop.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/abc8aa89c2.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Music</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        body {
            background: rgb(34, 2, 2);
            background: linear-gradient(90deg, rgba(34, 2, 2, 1) 22%, rgba(0, 46, 97, 1) 70%, rgba(140, 5, 17, 1) 94%);
            color: rgb(240, 231, 231);
        }

        .marg {
            margin-top: 40px;
        }

        audio::-webkit-media-controls-play-button,
        audio::-webkit-media-controls-panel {
            background-color: rgb(216, 198, 198);
            color: rgb(124, 0, 0);
        }

        audio {
            width: 80%;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="header-left">
            <a href="index.php"><img src="image/logo.png" alt="" width="170" height="150"></a>
            <ul>
                <li><a href="index.php" class="nav-item">Home</a></li>
                <li><a href="infopage.php" class="nav-item">About</a></li>
                <li><a href="shop.php" class="nav-item">Online Shop</a></li>
                <li><a href="?survey" class="nav-item">Survey</a></li>
                <?php
                if (!$_SESSION['user'] && isset($_GET['survey'])) {
                    echo '<script language="javascript">';
                    echo 'alert("Log in to the system!")';
                    echo '</script>';
                } else if ($_SESSION['user'] && isset($_GET['survey'])) {
                    header('Location: survey.php');
                }
                ?>
            </ul>
        </div>
        <div class="header-right">
            <ul>
                <?php
                if (!$_SESSION['user']) {
                    echo '<li><a href="login.php" class="nav-item">Log in</a></li>
                    <li><a href="reg.php" class="nav-item"><span class="reg-span">Register</span></a></li>';
                } else {
                    echo '<li><a href="profile.php" class="nav-item"> ' . $_SESSION['user']['email'] . ' </a></li>
                    <li><a href="logout.php" class="nav-item">Log Out</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="music.php">Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Videos</a>
                </li>
            </ul>
            <form class="d-flex" method="POST">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-light" type="submit" name="search_submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row grid-row marg">
            <div class="col col-lg-6 col-md-6 col-sm-12 grid-col ">
                <img src="image/relaximg.jpg" alt="relax" width="520" height="auto">
            </div>
            <div class="col col-lg-6 col-md-6 col-sm-12 grid-col ">
                <br>
                <h1>15 tracks from insomnia</h1>
                <br>
                <h2>Deep sleep, Relaxation, Calm music, Insomnia treatment, Calm sounds, REM Cycle, Sweet dreams</h2>
                <hr>
                <h5>Click <a href="music_rain.php">here</a> to check the rain sounds!</h5>
            </div>
        </div>
        <?php
        require('connection.php');
        $search = $_POST['search'];
        if (isset($_POST['search_submit'])) {
            $query = "SELECT * FROM music WHERE music_title LIKE '%$search%' OR music_author LIKE '%$search%'";
        } else {
            $query = "SELECT * FROM music WHERE id <= 13";
        }
        $result = mysqli_query($connection, $query);
        ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <form action="" method="POST">
                <div class="row grid-row marg">
                    <div class="col col-lg-6 col-md-6 col-sm-12 grid-col ">

                        <h4><?= $row['music_author'] ?> - <?= $row['music_title'] ?> </h4>
                        <input type="hidden" name="hidden_title" value="<?= $row['music_title']; ?>">
                        <input type="hidden" name="hidden_author" value="<?= $row['music_author']; ?>">
                        <input type="hidden" name="hidden_id" value="<?= $row['id']; ?>">
                        <button type="submit" class="btn btn-light" name="add_to_cart">Add to Favourites</button>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-12 grid-col ">
                        <audio controls>
                            <source src="<?= $row['music_source'] ?>" type="audio/mpeg">
                        </audio>

                    </div>
                </div>
            </form>

        <?php endwhile; ?>
        <?php
        if (isset($_GET["success"])) {
            echo '<script language="javascript">';
            echo 'alert("Item added successfully!")';
            echo '</script>';
        }
        ?>
    </div>
    <br>

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
            © 2021 DEK Heatlh. All rights reserved.
        </div>
    </div>
</body>

</html>