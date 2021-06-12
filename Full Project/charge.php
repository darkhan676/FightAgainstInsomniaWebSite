<?php
require("config.php");
require("connection.php");
$stripeToken = $_POST["stripeToken"];
$customer_name = $_POST["customer_name"];
$customer_email = $_POST["stripeEmail"];
$item_name = $_POST["item_name"];
$charge = \Stripe\Charge::create([
    'amount' => 500,
    'description' => $item_name,
    'currency' => 'usd',
    'source' => $stripeToken,
]);
if($charge) {
    $query = "INSERT INTO transactions(customer_name, customer_email, item_name)
    VALUES('$customer_name', '$customer_email', '$item_name')";
    $result = mysqli_query($connection, $query);
    if($result) {
        header('Location: profile.php');
    }
}
