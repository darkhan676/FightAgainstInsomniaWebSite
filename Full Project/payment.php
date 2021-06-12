<?php
session_start();
require("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/payment.css">
</head>

<body>
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <form action="charge.php" method="POST" id="payment_form">
            <div class="first-row">
                <div class="fullname">
                    <h3>Full name</h3>
                    <div class="input-field">
                        <input class="colorinp" type="text" name="customer_name" value="<?= $_SESSION['user']['fullname']; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="email">
                    <h3>Email address</h3>
                    <div class="input-field">
                        <input class="colorinp" type="text" name="customer_email" value="<?= $_SESSION['user']['email']; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="third-row">
                <div class="owner">
                    <h3>Phone Number</h3>
                    <div class="input-field">
                        <input class="colorinp" type="text" name="phone_number" id="phone_number" value="<?= $_SESSION['user']['phone_number'] ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="fourth-row">
                <h3>Card Type</h3>
                <div class="selection ">
                    <div class="cards">
                        <img src="image/mc.png" alt="">
                        <img src="image/vi.png" alt="">
                        <img src="image/pp.png" alt="">
                    </div>
                </div>
            </div>
            <div class="fifth-row">
                <div class="item_name">
                    <h3>Item name</h3>
                    <div class="input-field">
                        <input class="colorinp" type="text" name="item_name" value="<?= $_GET["item_title"]; ?>" readonly>
                    </div>
                </div>
            </div>
            <br>
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_51IwAV3DCfpIT9YMsghfK6th7rQ4G0xHR5jzY1AM4qmTD2ZfYe8b1In73e0upiUM1i90M2pMjghCVQEc8tcN2n0o500ym7wsJGx" data-name="<?= $cart_data[$keys]['item_title']; ?>" data-email="<?= $_SESSION['user']['email']; ?>" data-amount="500" data-locale="auto">
            </script>
        </form>
    </div>
</body>

</html>