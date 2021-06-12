<?php
session_start();
require('connection.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Personal Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/profile.js"></script>
    <script src="https://kit.fontawesome.com/822363b83c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header">
        <div class="header-left">
            <a href="index.php"><img src="image/logo.png" alt="" width="170" height="150"></a>
            <ul>
                <li><a href="index.php" class="nav-item">Home</a></li>
                <li><a href="infopage.php" class="nav-item">About</a></li>
                <li><a href="shop.php" class="nav-item">Online Shop</a></li>
                <li><a href="survey.php" class="nav-item">Survey</a></li>
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
    <div id="sleeping">
        <div class="sleeping-bubble">
            <div class="char1">Z</div>
            <div class="char2">Z</div>
            <div class="char3">Z</div>
            <div class="triangle"></div>
        </div>
    </div>
    <div id="container" style="display:flex; margin: 70px 0px 20px 0px;">
        <div id="image" style="margin-right: 10px;">
            <img src="<?= $_SESSION['user']['profile_picture'] ?>" />
        </div>
        <div id="texts" style="color:white;font-family:'Lora';">
            <h4> <?= $_SESSION['user']['fullname'] ?> </h4>
            <hr color="white">
            Username: <?= $_SESSION['user']['username'] ?>
            <br>
            E-Mail: <?= $_SESSION['user']['email'] ?>
            <br>
            Phone Number: <?= $_SESSION['user']['phone_number'] ?>
        </div>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="accordion" id="accordionExample1">
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Favourite Albums
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample1">
                    <div class="row">
                        <div class="card-body" id="album_output">
                            <table class="table table-sm table-primary table-striped">
                                <tr>
                                    <th width="40%">Album title</th>
                                    <th width="40%">Album desc</th>
                                    <th width="10%"></th>
                                    <th width="10%"></th>
                                </tr>
                                <?php
                                if (isset($_COOKIE["shopping_cart"])) {
                                    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                                    $cart_data = json_decode($cookie_data, true);
                                    foreach ($cart_data as $keys => $values) {
                                ?>
                                        <?php
                                        $email = $_SESSION['user']['email'];
                                        $item_name = $values["item_title"];

                                        $query = "SELECT * FROM transactions WHERE customer_email = '$email' AND 
                                                                                   item_name = '$item_name'";
                                        $result = mysqli_query($connection, $query);
                                        $counter = mysqli_num_rows($result);
                                        if ($counter == 1) {
                                        ?>
                                            <tr>
                                                <td><?= $values["item_title"]; ?> </td>
                                                <td><?= $values["item_desc"]; ?> </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary">Download</button>
                                                </td>
                                                <td><a href="profile.php?action=delete&item_title=<?= $values["item_title"]; ?> ">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a></td>

                                            </tr>
                                        <?php
                                        } else {

                                        ?>
                                            <tr>
                                                <td><?= $values["item_title"]; ?> </td>
                                                <td><?= $values["item_desc"]; ?> </td>
                                                <td><a href="payment.php?action=buy&item_title=<?= $values["item_title"]; ?>">
                                                        <button type="button" class="btn btn-success">Buy</button>
                                                </td>
                                                <td><a href="profile.php?action=delete&item_title=<?= $values["item_title"]; ?> ">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                <?php
                                    }
                                }
                                ?>
                                <?php
                                if (isset($_GET["action"])) {
                                    if ($_GET["action"] == "delete") {
                                        $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
                                        $cart_data = json_decode($cookie_data, true);
                                        foreach ($cart_data as $keys => $values) {
                                            if ($cart_data[$keys]['item_title'] == $_GET["item_title"]) {
                                                unset($cart_data[$keys]);
                                                $item_data = json_encode($cart_data);
                                                setcookie('shopping_cart', $item_data, time() + 7 * 24 * 60 * 60);
                                                header("location: profile.php?remove=1");
                                            }
                                        }
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Favourite Music
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample1">
                    <div class="row">
                        <div class="card-body" id="music_output">
                            <table class="table table-sm table-primary table-striped">
                                <tr>
                                    <th width="40%">Music author</th>
                                    <th width="40%">Music title</th>
                                    <th width="10%"></th>
                                    <th width="10%"></th>
                                </tr>
                                <?php
                                if (isset($_COOKIE["music_shopping_cart"])) {
                                    $cookie_data = stripslashes($_COOKIE['music_shopping_cart']);
                                    $cart_data = json_decode($cookie_data, true);
                                    foreach ($cart_data as $keys => $values) {
                                ?>
                                        <?php
                                        $email = $_SESSION['user']['email'];
                                        $item_name = $values["item_title"];

                                        $query = "SELECT * FROM transactions WHERE customer_email = '$email' AND 
                                                                                   item_name = '$item_name'";
                                        $result = mysqli_query($connection, $query);
                                        $counter = mysqli_num_rows($result);
                                        if ($counter == 1) {
                                        ?>
                                            <tr>
                                                <td><?= $values["music_author"]; ?> </td>
                                                <td><?= $values["item_title"]; ?> </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary">Download</button>
                                                </td>
                                                <td><a href="profile.php?action=delete&music_id=<?= $values["music_id"]; ?> ">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a></td>

                                            </tr>
                                        <?php
                                        } else {

                                        ?>
                                            <tr>
                                                <td><?= $values["music_author"]; ?> </td>
                                                <td><?= $values["item_title"]; ?> </td>
                                                <td><a href="payment.php?action=buy&item_title=<?= $values["item_title"]; ?> ">
                                                        <button type="button" class="btn btn-success">Buy</button>
                                                </td>
                                                <td><a href="profile.php?action=delete&music_id=<?= $values["music_id"]; ?> ">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                <?php
                                    }
                                }
                                ?>
                                <?php
                                if (isset($_GET["action"])) {
                                    if ($_GET["action"] == "delete") {
                                        $cookie_data = stripslashes($_COOKIE["music_shopping_cart"]);
                                        $cart_data = json_decode($cookie_data, true);
                                        foreach ($cart_data as $keys => $values) {
                                            if ($cart_data[$keys]['music_id'] == $_GET["music_id"]) {
                                                unset($cart_data[$keys]);
                                                $item_data = json_encode($cart_data);
                                                setcookie('music_shopping_cart', $item_data,);
                                                header("location: profile.php?remove=1");
                                            }
                                        }
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Link to the Personal Statistics
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample1">
                    <div class="row">
                        <div class="card-body">
                            <h4><a href="statistics.php">Personal Statistics</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Edit Profile
                        </button>
                    </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample1">
                    <div class="row">
                        <div class="card-body">
                            <form action="" method="POST">
                                <table class="table table-sm table-info table-hover">
                                    <tbody>
                                        <tr>
                                            <td><?= $_SESSION['user']['email'] ?></td>
                                            <td><a href="profile_edit.php?action=edit&edit_name=email">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td><?= $_SESSION['user']['fullname'] ?></td>
                                            <td><a href="profile_edit.php?action=edit&edit_name=fullname">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td><?= $_SESSION['user']['username'] ?></td>
                                            <td><a href="profile_edit.php?action=edit&edit_name=username">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td><?= $_SESSION['user']['phone_number'] ?></td>
                                            <td><a href="profile_edit.php?action=edit&edit_name=phone_number">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <td><?= $_SESSION['user']['password'] ?></td>
                                            <td><a href="profile_edit.php?action=edit&edit_name=password">
                                                    <button type="button" class="btn btn-info" data-toggle="modal">Edit</button>
                                                </a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
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



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>