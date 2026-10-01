<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = intval($_POST['id']);

    $title = $_POST['title'];
    $author = $_POST['author'];
    $quantity = intval($_POST['quantity']);
    $status = $_POST['status'];

    $sql = "UPDATE books SET
            title='$title',
            author='$author',
            quantity='$quantity',
            status='$status'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {

        header("Location: dashboard.php");
        exit();

    } else {

        echo "Error updating book: " . $conn->error;

    }
}

?>
