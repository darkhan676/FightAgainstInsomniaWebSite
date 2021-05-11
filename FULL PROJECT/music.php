<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="" href="">
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
    <script>
        $(document).ready(function() {
            $('.add-to-cart').click(function() {
                let id = $(this).attr('data-id');

                let music_string = localStorage.getItem('music');
                let music = music_string ? music_string.split(",") : [];
                if (music.indexOf(id) === -1) {
                    music.push(id);
                }
                localStorage.setItem("music", music.join(","));
            })
        })
    </script>
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
                <?php
                session_start();
                if (!$_SESSION['email']) {
                    echo '<li><a href="login.php" class="nav-item">Log in</a></li>
                    <li><a href="reg.php" class="nav-item"><span class="reg-span">Register</span></a></li>';
                } else {
                    echo '<li><a href="#" class="nav-item"> ' . $_SESSION['email'] . ' </a></li>
                    <li><a href="logout.php" class="nav-item">Log Out</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row grid-row marg">
            <div class="col col-lg-6 col-md-6 col-sm-12 grid-col ">
                <img src="image/relaximg.jpg" alt="relax" width="520" height="auto">
            </div>
            <div class="col col-lg-6 col-md-6 col-sm-12 grid-col ">
                <br>
                <h1>15 tracks from insomnia</h1>
                <br>
                <h2>Deep sleep, Relaxation, Calm music, Insomnia treatment, Calm sounds, REM Cycle, Sweet dreams,</h2>
            </div>
        </div>
        <?php
        require('connection.php');
        $query = "SELECT * FROM music";
        $result = mysqli_query($connection, $query);

        ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="row grid-row marg">
                <div class="col col-lg-6 col-md-6 col-sm-12 grid-col ">

                    <h4><?= $row['music_author'] ?> - <?= $row['music_title'] ?> </h4>
                    <button type="button" class="btn btn-light add-to-cart" data-id="<?= $row['id'] ?>">Add to Wishlist</button>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 grid-col ">
                    <audio controls>
                        <source src="<?= $row['music_source'] ?>" type="audio/mpeg">
                    </audio>

                </div>
            </div>

        <?php endwhile; ?>
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