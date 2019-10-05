<?php
session_start();

if ( isset($_GET["delete"]) ) {
	$i = $_GET["delete"];
	unset($_SESSION["cart"][$i]);	
}
?>

?>
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