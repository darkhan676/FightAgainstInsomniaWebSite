<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/abc8aa89c2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>DEK Health</title>
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
                    echo '<li><a href="#" class="nav-item"> '. $_SESSION['email'] .' </a></li>
                    <li><a href="logout.php" class="nav-item">Log Out</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="slideshow" style="z-index:0">
        <div class="slideshow-item">
            <img src="http://cnnphilippines.com/.imaging/mte/demo-cnn-new/750x450/dam/cnn/2020/9/6/Nightmare-Solutions_CNNPH.jpg/jcr:content/Nightmare-Solutions_CNNPH.jpg">
            <div class="slideshow-item-text">
                <h5>Do you want to get rid of your insomnia and start living a healthy life again?</h5>
                <p>Insomnia is a sleep disorder in which you have trouble falling and/or staying asleep.The condition
                    can be short-term (acute) or can last a long time (chronic). It may also come and go.</p>
            </div>
        </div>
        <div class="slideshow-item">
            <img src="https://www.medibank.com.au/content/dam/livebetter/en/images/migrated/fc8a91456cac7820ad1d67f4fafacfc6/09330d79-istock-873492684.jpg">
            <div class="slideshow-item-text">
                <h5>'You've come to the right place! Here you can find out more about your illness.</h5>
                <p>The best way to fight it is with special sounds,videos (sounds of rain, wind, interesting stories and
                    so on)© Dr.Myasnikov</p>
            </div>
        </div>
        <div class="slideshow-item">
            <img src="https://www.pbs.org/wgbh/nova/media/original_images/mysteries-sleep-img.jpg">
            <div class="slideshow-item-text">
                <h5>By visiting our website, we guarantee you a peaceful life. The main thing is to believe and not to
                    stop doing what you love!</h5>
                <p>It is highly recommended to pass survey which is located in the header of the website.You can find
                    various interesting sounds, videos and stories to relax your body, learn about insomnia and so on.
                </p>
            </div>
        </div>
    </div>
    <div class="dara">
        <h2>Recommended Albums by DEK</h2>
    </div>
    <div class="holdingcontainerr">
        <div class="internalcontainerL">
            <h1>Sounds of rain</h1><a href="#" target="_blank"><img class="dasimages" src="https://direct.rhapsody.com/imageserver/images/alb.306402353/500x500.jpg" width="100%" /></a>
            <p>

                Collected sounds of the rains for stress relief. Can be listened to at any time.Good after a hard day's
                work.Enjoy listening!</p>
        </div>

        <div class="internalcontainerM">
            <h1>A mix of sounds for relaxation</h1><a href="music.php" target="_blank"><img class="dasimages" src="https://m.media-amazon.com/images/I/61H8pUZ7Z5L._SS500_.jpg" width="100%" /></a>
            <p>
                This album is a mix of all the sounds for relaxation, such as rain, wind and stories.Enjoy listening!
            </p>
        </div>

        <div class="internalcontainerR">
            <h1>Different stories for sleep</h1><a href="#" target="_blank"><img class="dasimages" src="https://podcasts.podinstall.com/assets/img/rs/600/496ef7e738c0a8fb8188e4875ea50ea9fc50601e-a389e817.jpg" width="100%" /></a>
            <p>

                This album consists of interesting bedtime stories. This album is recommended to listen to before
                sleep.Enjoy listening!</p>
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
