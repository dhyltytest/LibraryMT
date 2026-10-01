<?php

include 'config.php';

$title = $_POST['title'];
$author = $_POST['author'];
$category = $_POST['category'];
$isbn = $_POST['isbn'];
$publisher = $_POST['publisher'];
$publication_year = $_POST['publication_year'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];

$sql = "INSERT INTO books
(title,author,category,isbn,publisher,publication_year,quantity,status)

VALUES
('$title','$author','$category','$isbn','$publisher','$publication_year','$quantity','$status')";

$conn->query($sql);

header("Location: index.php");

?>
