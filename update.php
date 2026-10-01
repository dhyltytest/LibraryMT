<?php

include 'config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];

$sql = "UPDATE books SET

title='$title',

author='$author',

quantity='$quantity',

status='$status'

WHERE id=$id";

$conn->query($sql);

header("Location: index.php");

?>
