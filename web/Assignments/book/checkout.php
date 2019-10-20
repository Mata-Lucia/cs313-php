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
                    <li><a href="index.html">Home</li>
                    <li><a href="checkout.html">Cheked Out</li>
                    <li><a href="returned.html">Returned</li>
                    <li><a href="addbook.html">Add New</li>
                    <li><a href="return.html">Return</li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Book Manager</h1>
            <h2>Books You Are Reading</h2>
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


            foreach ($db->query('SELECT title, authorname, genre, reading_level, check_out, due_date FROM Book AS b
            JOIN Author AS a 
            ON b.authorID = a.authorID') as $row)
            {
            echo 'Title: ' . $row['title'];
            echo 'Author: ' . $row['authorname'];
            echo 'Genre: ' . $row['genre'];
            echo 'Reading Level: ' . $row['reading_level'];
            echo 'Check Out Date: ' . $row['check_out'];
            echo 'Due Date: ' . $row['due_date'];
            echo '<br/>';
            }
            
            ?>
        </main>
        <footer>
            <p>CS 313 Lucia Mata 2019</p>
        </footer>
    </body>
</html>