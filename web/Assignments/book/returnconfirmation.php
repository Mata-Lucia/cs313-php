<?php

ini_set('display_errors', 1);

$book_id = htmlspecialchars($_POST['bookID']);
$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['review']);

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('INSERT INTO Review (bookID, review_content) VALUES (:book_id, :content);');
$stmt->bindValue(':book_id', $book_id, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_INT);
$stmt->execute();

$stmt = $db->prepare('UPDATE Book SET already_read = 'true' WHERE bookID = :book_id;');
$stmt->bindValue(':book_id', $book_id, PDO::PARAM_INT);
$stmt->execute();

$new_page = "returned.php";
header("Location: $new_page");
die();
