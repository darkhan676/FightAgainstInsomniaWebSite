<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="" href="">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/822363b83c.js" crossorigin="anonymous"></script>
    <title>Survey</title>
    <style>
        body {
            background: rgb(10, 0, 7);
            background: linear-gradient(90deg, rgba(10, 0, 7, 1) 0%, rgba(88, 1, 58, 1) 50%, rgba(14, 0, 0, 1) 100%);
            color: rgb(240, 231, 231);
        }

        .fntsz {
            font-size: 20px;
            line-height: 1.6em;
        }

        li {
            list-style: none;
        }

        .container {
            width: 70%;
            margin: 120px auto;
            overflow: auto
        }

        .pull-left {
            float: left;
        }

        .pull-right {
            float: right;
        }


        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            padding: 10px;
            width: 100%;
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
                <li><a href="survey.php" class="nav-item">Survey</a></li>
            </ul>
        </div>
        <div class="header-right">
            <ul>
                <li><a href="profile.php" class="nav-item"> <?= $_SESSION['user']['email'] ?> </a></li>
                <li><a href="logout.php" class="nav-item">Log Out</a></li>
            </ul>
        </div>
    </div>
    <div class="container fntsz">
        <form class="margfor questionForm" id="q1" data-question="1">
            <h3>1. Falling asleep time</h3>
            <ul class="hr">
                <li><input type="radio" name="q2" value="a" />instantly</li>
                <li><input type="radio" name="q2" value="b" />not long</li>
                <li><input type="radio" name="q2" value="c" />medium </li>
                <li><input type="radio" name="q2" value="d" />long</li>
                <li><input type="radio" name="q2" value="e" />very long</li>
            </ul>
            <button id="submit">Submit</button>
        </form>

        <form class="margfor questionForm" id="q2" data-question="2">
            <h3>2.Sleep duration</h3>
            <ul class="hr">
                <li><input type="radio" name="q3" value="a" />very long</li>
                <li><input type="radio" name="q3" value="b" />long </li>
                <li><input type="radio" name="q3" value="c" />average </li>
                <li><input type="radio" name="q3" value="d" />short </li>
                <li><input type="radio" name="q3" value="e" />very short </li>
            </ul>
            <button id="submit">Submit</button>
        </form>

        <form class="margfor questionForm" id="q3" data-question="3">
            <h3>3.Number of night awakenings</h3>
            <ul class="hr">
                <li><input type="radio" name="q4" value="a" />no </li>
                <li><input type="radio" name="q4" value="b" />rarely </li>
                <li><input type="radio" name="q4" value="c" />infrequently </li>
                <li><input type="radio" name="q4" value="d" />often </li>
                <li><input type="radio" name="q4" value="e" />very often </li>
            </ul>
            <button id="submit">Submit</button>
        </form>

        <form class="margfor questionForm" id="q4" data-question="4">
            <h3>4.Sleep quality</h3>
            <ul class="hr">
                <li><input type="radio" name="q5" value="a" />excellent</li>
                <li><input type="radio" name="q5" value="b" />good</li>
                <li><input type="radio" name="q5" value="c" />medium</li>
                <li><input type="radio" name="q5" value="d" />bad</li>
                <li><input type="radio" name="q5" value="у" />very bad</li>
            </ul>
            <button id="submit">Submit</button>
        </form>

        <form class="margfor questionForm" id="q5" data-question="5">
            <h3>5.Number of dreams</h3>
            <ul class="hr">
                <li><input type="radio" name="q6" value="a" />no</li>
                <li><input type="radio" name="q6" value="b" />at times</li>
                <li><input type="radio" name="q6" value="c" />moderate</li>
                <li><input type="radio" name="q6" value="d" />multiple</li>
                <li><input type="radio" name="q6" value="e" />disturbing</li>
            </ul>
            <button id="submit">Submit</button>
        </form>

        <form class="margfor questionForm" id="q6" data-question="6">
            <h3>6.Morning awakening quality</h3>
            <ul class="hr">
                <li><input type="radio" name="q7" value="a" />excellent</li>
                <li><input type="radio" name="q7" value="b" />good</li>
                <li><input type="radio" name="q7" value="c" />medium</li>
                <li><input type="radio" name="q7" value="d" />bad</li>
                <li><input type="radio" name="q7" value="e" />very bad</li>
            </ul>
            <button id="submit">Submit</button>
        </form>
        <div id="results"></div>
        <br>


    </div>


    <div class="footer ">
        <img src="image/logo.png" alt="" width="180" height="160">
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
                <li><a href="survey.php">Survey</a></li>
            </ul>
        </div>
        <div class="footer-privacy">
            Privacy Policy
        </div>
        <div class="footer-years">
            © 2021 DEK Heatlh. All rights reserved.
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/survey.js"></script>
</body>

</html>