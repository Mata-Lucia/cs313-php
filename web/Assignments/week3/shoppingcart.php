<?php
session_start();

$product = array("Ballons", "Banner", "Plates");
$image = array("images/ballons.png", "images/banner.png","images/plates.png");
$price = array("$4", "$5", "$3");

if ( isset($_GET["add"]) ) {
    $i = $_GET["add"];
    $_SESSION["product"][$i] = $product[$i]; 
    $_SESSION["image"][$i] = $image[$i]; 
    $_SESSION["price"][$i] = $price[$i]; 
	$_SESSION["cart"][$i] = $i;
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
    <h2>Browse Products</h2>
    <div class="productdisplay">
        <?php
        for ($i=0; $i< count($product); $i++) {
        ?>
        <div class="product">
            <h3><?php echo($product[$i]); ?></h3>
            <img src=<?php echo($image[$i]); ?> alt="productimage">
            <p><?php echo($price[$i]); ?></p>
            <a href="?add=<?php echo($i); ?>">Add to cart</a>
        </div>
        <?php
        }
        ?>
    </div>
</body>