<?php
session_start();

$name = htmlspecialchars($_REQUEST["name"]);
$address = htmlspecialchars($_REQUEST["address"]);
$city = htmlspecialchars($_REQUEST["city"]);
$state = htmlspecialchars($_REQUEST["state"]);
$zip = htmlspecialchars($_REQUEST["zip"]);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="shoppingcart.css">
    <title>Shopping Cart Activity</title>
</head>
<body>
    <h1>Confirmation</h1>
    <p>Thank you for shopping!<p>
    <h2>Your order:</h2>
    <?php
    foreach ( $_SESSION["cart"] as $i ) {
    ?>
        <div>
            <p><?php echo( $product[$_SESSION["cart"][$i]] ); ?></p>
            <p><?php echo( $_SESSION["product"][$i] ); ?></p>
            <img src=<?php echo( $_SESSION["image"][$i] ); ?> alt="productimage">
            <p><?php echo( $_SESSION["price"][$i] ); ?></p>
        </div>
    <?php
    }
    ?>
    <h2>Will be mailed to:</h2>
    <p>Name: <?php echo $name; ?></p>
    <p>Address: <?php echo $address; ?></p>
    <p>City: <?php echo $city; ?></p>
    <p>State: <?php echo $state; ?></p>
    <p>Zip Code: <?php echo $zip; ?></p>
    <a href="shoppingcart.php">Back to Browsing</a>
</body>