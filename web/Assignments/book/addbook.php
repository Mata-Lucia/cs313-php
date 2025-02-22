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
                    <li><a href="addbook.php" class="active">Add New</a></li>
                    <li><a href="return.php">Return</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>The Book Manager</h1>
            <h2>Add a New Book to the Reading List</h2>
            <div class="formbooks">
            <form method="post" action="addconfirmation.php">
                <label>Title</label><input type="text" name="title"><br>
                <label>Author</label><input name="author" type="text"><br>
                <label>Genre</label><input type="text" name="genre"><br>
                <label>Reading Level (only numbers)</label><input type="text" name="reading_level"><br>
                <label>Check Out Date (YYYY-MM-DD)</label><input type="text" name="check_out"><br>
                <label>Due Date (YYYY-MM-DD)</label><input type="text" name="due_date"><br>
                <input type="submit" value="Add Book">
            </form>
            </div>
        </main>
        <footer>
            <p>CS 313 Lucia Mata 2019</p>
        </footer>
    </body>
</html>