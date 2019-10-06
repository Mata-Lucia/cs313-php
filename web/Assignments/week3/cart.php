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
    <header>
        <h1>POPPY PARTY STORE</h1>
        <a href="cart.php"><img src="images/cart.png" alt="cart"></a>
    </header>
    <h2>Cart</h2>
    <div class="productdisplay">
    <?php
    foreach ( $_SESSION["cart"] as $i ) {
    ?>
        <div class="product">
            <h3><?php echo( $product[$_SESSION["cart"][$i]] ); ?></h3>
            <h3><?php echo( $_SESSION["product"][$i] ); ?></h3>
            <img src=<?php echo( $_SESSION["image"][$i] ); ?> alt="productimage">
            <p><?php echo( $_SESSION["price"][$i] ); ?></p>
            <a href="?delete=<?php echo($i); ?>">Delete from cart</a>
        </div>
    <?php
    }
    ?>
    </div>
    <div class="link">
    <a href="shoppingcart.php">Back to Browsing</a>
    <a href="checkout.php">Check Out</a>
    </div>
</body>