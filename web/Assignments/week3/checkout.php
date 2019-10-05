<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="shoppingcart.css">
    <title>Shopping Cart Activity</title>
</head>
<body>
    <h1>Check Out</h1>
    <p>Please enter your address:</p>
    <form action="confirmation.php" method="post">
        <label for="name">Name</label><input type="text" name="name"><br>
        <label for="street">Street</label><input type="text" name="street"><br>
        <label for="city">City</label><input type="text" name="city"><br>
        <label for="state">State</label><input type="text" name="state"><br>
        <label for="zip">Zip Code</label><input type="text" name="zip"><br>
        <input type="submit" name="submit" value="Complete Purchase">
    </form>
    <a href="cart.php">Go Back to Cart</a>
</body>