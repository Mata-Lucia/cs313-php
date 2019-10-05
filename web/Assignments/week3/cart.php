<?php
session_start();

if ( isset($_GET["delete"]) ) {
	$i = $_GET["delete"];
	unset($_SESSION["cart"][$i]);	
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="shoppingcart.css">
    <title>Shopping Cart Activity</title>
</head>
<body>
    <h1>Cart</h1>
    <?php
    foreach ( $_SESSION["cart"] as $i ) {
    ?>
        <div>
            <p><?php echo( $product[$_SESSION["cart"][$i]] ); ?></p>
            <p><?php echo( $_SESSION["product"][$i] ); ?></p>
            <img src=<?php echo( $_SESSION["image"][$i] ); ?> alt="productimage">
            <p><?php echo( $_SESSION["price"][$i] ); ?></p>
            <a href="?delete=<?php echo($i); ?>">Delete from cart</a>
        </div>
    <?php
    }
    ?>
    <a href="shoppingcart.php">Back to Browsing</a>
    <a href="checkout.php">Check Out</a>
</body>