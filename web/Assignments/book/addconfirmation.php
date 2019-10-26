<?php

ini_set('display_errors', 1);

$title = htmlspecialchars($_POST['title']);
$author = htmlspecialchars($_POST['author']);
$genre = htmlspecialchars($_POST['genre']);
$reading_level = htmlspecialchars($_POST['reading_level']);
$check_out = htmlspecialchars($_POST['check_out']);
$due_date = htmlspecialchars($_POST['due_date']);
$already_read = 'false';

require('dbConnect.php');
$db = get_db();

$stmt = $db->prepare('INSERT INTO Author (authorName) VALUES (:author);');
$stmt->bindValue(':author', $author, PDO::PARAM_INT);
$stmt->execute();

$newId = $pdo->lastInsertId('authorID');

$stmt = $db->prepare('INSERT INTO Book (authorID, title, genre, reading_level, check_out, due_date, already_read ) 
VALUES (:newId,:title, :genre, :reading_level, :check_out, :due_date, :already_read);');
$stmt->bindValue(':newId', $newId, PDO::PARAM_INT);
$stmt->bindValue(':title', $title, PDO::PARAM_INT);
$stmt->bindValue(':genre', $genre, PDO::PARAM_INT);
$stmt->bindValue(':reading_level', $reading_level, PDO::PARAM_INT);
$stmt->bindValue(':check_out', $check_out, PDO::PARAM_INT);
$stmt->bindValue(':due_date', $due_date, PDO::PARAM_INT);
$stmt->bindValue(':already_read', $already_read, PDO::PARAM_INT);
$stmt->execute();

$new_page = "checkout.php";
header("Location: $new_page");
die();

?>