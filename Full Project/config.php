<?php
require_once "stripe-php/init.php";  

$stripe = array(
    "publishableKey" => "pk_test_51IwAV3DCfpIT9YMsghfK6th7rQ4G0xHR5jzY1AM4qmTD2ZfYe8b1In73e0upiUM1i90M2pMjghCVQEc8tcN2n0o500ym7wsJGx",
    "secretKey" => "sk_test_51IwAV3DCfpIT9YMsK88FDdE4Ib6IjMvhV7LhgzktmOeIDpO6qGjqkRzfwWa0Xml5g2S7MaD8CjTuHqQIwEg1dJDI00zb0egpxH"
);

\Stripe\Stripe::setApiKey($stripe["secretKey"]);
?>
