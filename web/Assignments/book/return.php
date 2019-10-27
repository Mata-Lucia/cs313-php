<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link type="text/css" rel="stylesheet" href="main.css">
        <title>Book Manager</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="checkout.php">Cheked Out</a></li>
                    <li><a href="returned.php">Returned</a></li>
                    <li><a href="addbook.php">Add New</a></li>
                    <li><a href="return.php">Return</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Book Manager</h1>
            <h2>Return a Book</h2>
            <form action="returnconfirmation.php" method="post">
                <label>Title</label>
                <?php

                require('dbConnect.php');
                $db = get_db();

                $query = $db->query(" SELECT bookID, title FROM Book"); // Run your query

                echo '<select name="titlebook">'; // Open your drop down box

                // Loop through the query results, outputing the options one by one
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $bookid = $row['bookID'];
                    echo '<p>' . $bookid . '</p>';
                    echo "<option value = '".$bookid."'" . ">".$row['title'].'</option>';
                }

                echo '</select>';

                ?>
                <label>What did you think of the book?</label><input type="textbox" name="review">
                <input type="submit" value="Return book">
            </form>
        </main>
        <footer>
            <p>CS 313 Lucia Mata 2019</p>
        </footer>
    </body>
</html>