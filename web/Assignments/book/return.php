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
                    <li><a href="checkout.php">Reading</a></li>
                    <li><a href="returned.php">Returned</a></li>
                    <li><a href="addbook.php">Add New</a></li>
                    <li><a href="return.php" class="active">Return</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>The Book Manager</h1>
            <h2>Return a Book</h2>
            <form action="returnconfirmation.php" method="post">
            <div class="formbooks">
                <label>Title</label>
                <?php

                require('dbConnect.php');
                $db = get_db();

                echo '<select name="titlebook">';

                foreach ($db->query("SELECT bookID, title FROM Book WHERE already_read = 'false';") as $row)
                {
                    echo "<option value='" .$row['bookid'] . "'>".$row['title'].'</option>';
                }

                echo '</select><br>';

                ?>
                <label>What did you think of the book?</label><input type="textbox" name="review">
                <input type="submit" value="Return book">
            </form>
            </div>
        </main>
        <footer>
            <p>CS 313 Lucia Mata 2019</p>
        </footer>
    </body>
</html>