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
                    <li><a href="checkout.php" class="active">Reading</a></li>
                    <li><a href="returned.php">Returned</a></li>
                    <li><a href="addbook.php">Add New</a></li>
                    <li><a href="return.php">Return</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>The Book Manager</h1>
            <h2>Books You Are Reading</h2>
            <div class="list">
            <?php
            try
            {
              $dbUrl = getenv('DATABASE_URL');
            
              $dbOpts = parse_url($dbUrl);
            
              $dbHost = $dbOpts["host"];
              $dbPort = $dbOpts["port"];
              $dbUser = $dbOpts["user"];
              $dbPassword = $dbOpts["pass"];
              $dbName = ltrim($dbOpts["path"],'/');
            
              $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
            
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $ex)
            {
              echo 'Error!: ' . $ex->getMessage();
              die();
            }


            foreach ($db->query("SELECT title, authorname, genre, reading_level, check_out, due_date FROM Book AS b
            JOIN Author AS a 
            ON b.authorID = a.authorID
            WHERE already_read = 'false'") as $row)
            {
            echo '<div class="item">';
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<ul>';
            echo '<li>Author: ' . $row['authorname'] . '</li>';
            echo '<li>Genre: ' . $row['genre'] . '</li>';
            echo '<li>Reading Level: ' . $row['reading_level'] . '</li>';
            echo '<li>Check Out Date: ' . $row['check_out'] . '</li>';
            echo '<li>Due Date: ' . $row['due_date'] . '</li>';
            echo '</ul>';
            echo '</div>';
            }
            
            ?>
            </div>
            <div class="deletebooks">
                <h3>Delete a Book</h3>
                <p>Did you add a book by mistake? Do you want to delete it from the list instead of marking it as returned? Choose it below and delete!</p>
                <p>If you need to return instead, click <a href="return.php">here!</a></p>
                <form action="deletebookreading.php" method="post">
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
                <input type="submit" value="Delete book">
            </form>
            </div>
        </main>
        <footer>
            <p>CS 313 Lucia Mata 2019</p>
        </footer>
    </body>
</html>