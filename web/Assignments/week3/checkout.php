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
    <header>
        <h1>POPPY PARTY STORE</h1>
        <a href="cart.php"><img src="images/cart.png" alt="cart"></a>
    </header>
    <h2>Check Out</h2>
    <p>Please enter your address:</p>
    <form action="confirmation.php" method="post">
        <label for="name">Name</label><input type="text" name="name" required><br>
        <label for="street">Street</label><input type="text" name="street" required><br>
        <label for="city">City</label><input type="text" name="city" required><br>
        <label for="state">State</label><input type="text" name="state" required><br>
        <label for="zip">Zip Code</label><input type="text" name="zip" required><br>
        <input type="submit" name="submit" value="Complete Purchase" class="submit">
    </form>
    <div class="link">
    <a href="cart.php">Back to Cart</a>
    </div>
</body>