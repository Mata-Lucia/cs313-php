<?php
session_start();
?>
<h1>Cart</h1>
<?php
foreach ( $_SESSION["cart"] as $i ) {
?>
	<div>
        <p><?php echo( $product[$_SESSION["cart"][$i]] ); ?></p>
        <p><?php echo( $_SESSION["product"][$i] ); ?></p>
        <p><?php echo( $_SESSION["image"][$i] ); ?></p>
		<p><?php echo( $_SESSION["price"][$i] ); ?></p>
    </div>
<?php
}
?>