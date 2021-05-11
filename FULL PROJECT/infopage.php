<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="" href="">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/abc8aa89c2.js"></script>
    <title>Insomnia</title>
    <style>
        body {
            background: rgb(20, 20, 20);
            background: linear-gradient(90deg, rgba(20, 20, 20, 1) 0%, rgba(29, 42, 46, 1) 100%);
            color: rgb(240, 231, 231);
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
    <img src="image/1.jpg" alt="Trulli" width="100%" height="500">
    <div class="container">
        <h3>Insomnia</h3>
        <p class="fntp" align="justify">Insomnia is a disorder of falling asleep and maintaining sleep. Insomnia is the
            most common
            sleep disorder and, at the same time,
            one of the most common reasons for seeking medical attention. Disturbed falling asleep, interrupted sleep or
            waking up too early are considered manifestations of
            the disease only in those cases when they bother the patient, since some people may consider even a
            three-hour night's sleep to be their norm.
            In most cases, psychological factors are the cause of insomnia.</p>
        <hr>
        <h3>What is encephalophony?</h3>
        <p class="fntp" align="justify">Encephalophony ("music of the brain") is a technique that allows, without drugs
            and
            psychotherapy sessions,
            to correct sleep disorders against the background of chronic stress, fatigue, when changing time zones,
            certain types of anxiety and depression.</p><br>
        <p class="fntp" align="justify">The history of the origin of the method is associated with the name of Yakov
            Iosifovich Levin,
            a professor at the Sechenov Moscow Medical Academy. For a long time he studied the physiology of sleep and
            sleep disorders.</p><br>
        <p class="fntp" align="justify">The method has been repeatedly tested since 1991 and successfully passed
            clinical trials in
            Russia, the USA and Europe.
            The method is based on regular listening to music tracks obtained as a result of converting the brain's own
            electrical activity (electroencephalogram) into music.
            "Musical medicine" is used before going to bed for 8-10 minutes, in case of premature waking at night and in
            the morning for 2-3 minutes to improve mood, reduce drowsiness.</p><br>
        <h5>The technique provides:</h5>
        <ul>
            <li>Improving adaptation to stress</li>
            <li>Preventing the effects of daily stress</li>
            <li>Improving overall well-being</li>
            <li>It is used both independently and as part of complex therapy.</li>
        </ul>
        <hr>
        <h3>How effective is encephalophony?</h3>
        <p class="fntp" align="justify">Most often, the technique is used in the treatment of sleep disorders.
            Encephalophony is most
            effective.
            About 85% of patients noted a significant improvement in their condition.</p><br>
        <p class="fntp" align="justify">Suffering from sleep disorders noted a reduction or complete elimination of
            symptoms of the
            pathological condition.</p><br>
        <h5>Patients were able to forget about:</h5>
        <ul>
            <li>Getting up early unnecessarily</li>
            <li>Difficulty falling asleep</li>
            <li>Frequent awakenings at night</li>
        </ul>
        <p class="fntp" align="justify">After this site, patients noted that they no longer suffer from sleep
            disturbances that
            previously occurred during night work,
            and difficulty falling asleep and waking up due to jet lag.</p><br>
        <h5>The positive effect of encephalophony is manifested:</h5>
        <ul>
            <li>Increased duration and depth of sleep</li>
            <li>Improving overall sleep quality scores</li>
            <li>Decreased motor activity at night</li>
            <li>Shorter periods of wakefulness during sleep</li>

        </ul>

    </div>
    <div class="footer">
        <h2>DEK</h2>
        <div class="footer-social">
            <a href="#" target="_blank">
                <i class="fa fa-facebook-official"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fa fa-twitter-square"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fa fa-linkedin-square"></i>
            </a>
            <a href="#" target="_blank">
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
