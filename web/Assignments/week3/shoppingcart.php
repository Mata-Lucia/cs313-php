<?php
session_start();

$product = array("Ballons", "Banner", "Plates");
$image = array("images/ballons.png", "images/banner.png","images/plates.png");
$price = array("$5", "$5", "$5");

if ( isset($_GET["add"]) ) {
	$i = $_GET["add"];
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
    <a href="cart.php"><img src="images/cart.png" alt="cart"></a>
    <h1>Browse Products</h1>
    <?php
for ($i=0; $i< count($product); $i++) {
?>
	<div>
        <h2><?php echo($product[$i]); ?></h2>
        <img src=<?php echo($image[$i]); ?> alt="Banner">
		<p><?php echo($price[$i]); ?></p>
		<a href="?add=<?php echo($i); ?>">Add to cart</a>
</div>
<?php
}
?>
</body>