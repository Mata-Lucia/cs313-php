<?php
session_start();

$product = array("Ballons", "Banner", "Plates");
$image = array("images/ballons.png", "mages/banner.png","images/plates.png");
$price = array("$5", "$5", "$5");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="shoppingcart.css">
    <title>Shopping Cart Activity</title>
</head>
<body>
    <a href="cart.php">Cart</a>
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