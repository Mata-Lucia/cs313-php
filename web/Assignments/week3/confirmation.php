<?php
session_start();

$name = htmlspecialchars($_REQUEST["name"]);
$street = htmlspecialchars($_REQUEST["street"]);
$city = htmlspecialchars($_REQUEST["city"]);
$state = htmlspecialchars($_REQUEST["state"]);
$zip = htmlspecialchars($_REQUEST["zip"]);

if ( isset($_GET["back"]) ) {
	$i = $_GET["back"];
    unset($_SESSION["cart"]);	
    header("Location: https://secret-springs-85688.herokuapp.com/Assignments/week3/shoppingcart.php");
}

?>

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
    <h2>Confirmation</h2>
    <p>Thank you for shopping!<p>
    <h3>Your order:</h3>
    <div class="productdisplay">
    <?php
    foreach ( $_SESSION["cart"] as $i ) {
    ?>
        <div class="product">
            <h3><?php echo( $product[$_SESSION["cart"][$i]] ); ?></h3>
            <h3><?php echo( $_SESSION["product"][$i] ); ?></h3>
            <img src=<?php echo( $_SESSION["image"][$i] ); ?> alt="productimage">
            <p><?php echo( $_SESSION["price"][$i] ); ?></p>
        </div>
    <?php
    }
    ?>
    </div>
    <div class="address">
    <h3>Will be mailed to:</h3>
    <p>Name: <?php echo $name; ?></p>
    <p>Address: <?php echo $street; ?></p>
    <p>City: <?php echo $city; ?></p>
    <p>State: <?php echo $state; ?></p>
    <p>Zip Code: <?php echo $zip; ?></p>
    <a href="?back=<?php echo($i); ?>" class="link">Back to Browsing</a>
    </div>
</body>