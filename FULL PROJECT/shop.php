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
    <script>
        $(document).ready(function() {
            $('.add-to-cart').click(function() {
                let id = $(this).attr('data-id');
                let albums_string = localStorage.getItem('albums');
                let albums = albums_string ? albums_string.split(",") : [];
                if (albums.indexOf(id) === -1) {
                    albums.push(id);
                }
                localStorage.setItem("albums", albums.join(","));
            })
        })
    </script>
    <title>Shop</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        body {
            background: rgb(34, 2, 2);
            background: linear-gradient(90deg, rgba(34, 2, 2, 1) 0%, rgba(89, 5, 69, 1) 100%);
            color: rgb(240, 231, 231);
        }



        .product-title {
            margin: 0 0 40px;
            margin-top: 20px;
            color: #e7dfdf;
            text-align: center;
        }

        .grid-row {
            margin: 0px;
            padding: 0px;
            text-align: center;
        }

        .grid-col {
            margin: auto;
            padding: 0px;
        }

        .martop {
            margin-top: 45px;
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
                        <li><a href="reg.php" class="nav-item">Register</a></li>';
                } else {
                    echo '<li><a href="#" class="nav-item"> ' . $_SESSION['email'] . ' </a></li>
                    <li><a href="logout.php" class="nav-item">Log Out</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row grid-row ">
            <h2 class="product-title">Popular paid albums</h2>
            <?php
            require('connection.php');
            $query = "SELECT * FROM albums";
            $result = mysqli_query($connection, $query);
            ?>

            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="col col-lg-3 col-md-6 col-sm-12 grid-col ">
                    <div class="card text-white bg-dark " style="width: 18rem;">
                        <img src="<?= $row['album_img'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['album_title'] ?></h5>
                            <p class="card-text"><?= $row['album_desc'] ?></p>
                            <button type="button" class="btn btn-warning add-to-cart" data-id="<?= $row['id'] ?>">Add to Wishlist</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="footer martop">
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