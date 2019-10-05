<?php
session_start();
?>
<h1>Cart</h1>
<?php
foreach ( $_SESSION["cart"] as $i ) {
?>
	<div>
		<td><?php echo( $product[$_SESSION["cart"][$i]] ); ?></td>
		<td><?php echo( $_SESSION["price"][$i] ); ?></td>
    </div>
<?php
}
?>